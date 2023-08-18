<?php

namespace App\Http\Controllers\User\Data;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\List_Alumni;
use App\Models\Tracer;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    public function index()
    {
        $params = [
            'title' => 'Data Alumni | Tracer Study - Universitas Islam Balitar',
        ];

        return view('users.alumni.index')->with($params);
    }

    public function getIndexAjax(Request $request)
    {
        $draw = $request->get('draw');

        /** filter */
        $search = $request->string;

        /** end filter */
        if ($search) {
            $data = [];
            $count = 0;

            function preprocess($text)
            {
                // Mengubah semua karakter menjadi huruf kecil dan menghapus karakter non-alfabet
                $text = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
                return $text;
            }

            // Fungsi untuk melakukan tokenizing menjadi k-gram
            function tokenize($text, $k)
            {
                $tokens = [];
                $n = strlen($text);

                // Memisahkan teks menjadi k-gram
                for ($i = 0; $i < $n - $k + 1; $i++) {
                    $tokens[] = substr($text, $i, $k);
                }

                return $tokens;
            }

            // Fungsi untuk menghitung nilai hash menggunakan rolling hash
            function rollingHash($token)
            {
                $hash = 0;
                $n = strlen($token);
                $prime = 10; // Bilangan prima untuk menghindari kolisi hash

                for ($i = 0; $i < $n; $i++) {
                    $hash += ord($token[$i]) * pow($prime, $n - $i - 1);
                }

                return $hash;
            }

            // Fungsi untuk menghitung fingerprint dari token
            function fingerprint($token)
            {
                return rollingHash($token);
            }

            // Fungsi untuk menghitung kesamaan antara dua set fingerprint
            function similarity($fingerprint1, $fingerprint2)
            {
                $intersection = count(array_intersect($fingerprint1, $fingerprint2));
                $similarity = (2 * $intersection) / (count($fingerprint1) + count($fingerprint2)) * 100;

                return $similarity;
            }

            // Data input
            $data_input = $search;
            $data_sample = Alumni::get();
            $ds_array = $data_sample->toArray();

            foreach ($ds_array as $key => $value) {
                $values = $value['NIM'] . $value['nama'];
                // Preprocessing
                $data_input = preprocess($data_input);
                $data_sample[$key] = preprocess($values);

                // Tokenizing
                $k = 3;
                $tokens_input = tokenize($data_input, $k);
                $tokens_sample = tokenize($data_sample[$key], $k);

                // Hashing (Rolling Hash)
                $fingerprints_input = [];
                $fingerprints_sample = [];

                foreach ($tokens_input as $token) {
                    $fingerprints_input[] = fingerprint($token);
                }

                foreach ($tokens_sample as $token) {
                    $fingerprints_sample[] = fingerprint($token);
                }

                // Similarity
                $similarity = similarity($fingerprints_input, $fingerprints_sample);

                $value['similarity'] = round($similarity, 2);

                // Tampilkan hasil

                if ($similarity > 0) {
                    $data[] = $value;
                    usort($data, function ($a, $b) {return $a['similarity'] < $b['similarity'];});
                    $count = count($data);
                }
            }
        } else {
            $data = Alumni::get();
            $count = Alumni::count();
        }
        // dd($data);
        $data = array(
            'draw' => $draw,
            'recordsTotal' => $count,
            'recordsFiltered' => $count,
            'data' => $data
        );

        echo json_encode($data);
    }

    public function detailRabin(Request $request)
    {
        if ($request->search) {
            $data = [];
            $count = 0;

            function preprocess($text)
            {
                // Mengubah semua karakter menjadi huruf kecil dan menghapus karakter non-alfabet
                $text = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $text));
                return $text;
            }

            // Fungsi untuk melakukan tokenizing menjadi k-gram
            function tokenize($text, $k)
            {
                $tokens = [];
                $n = strlen($text);

                // Memisahkan teks menjadi k-gram
                for ($i = 0; $i < $n - $k + 1; $i++) {
                    $tokens[] = substr($text, $i, $k);
                }

                return $tokens;
            }

            // Fungsi untuk menghitung nilai hash menggunakan rolling hash
            function rollingHash($token)
            {
                $hash = 0;
                $n = strlen($token);
                $prime = 10; // Bilangan prima untuk menghindari kolisi hash

                for ($i = 0; $i < $n; $i++) {
                    $hash += ord($token[$i]) * pow($prime, $n - $i - 1);
                }

                return $hash;
            }

            // Fungsi untuk menghitung fingerprint dari token
            function fingerprint($token)
            {
                return rollingHash($token);
            }

            // Fungsi untuk menghitung kesamaan antara dua set fingerprint
            function similarity($fingerprint1, $fingerprint2)
            {
                $intersection = count(array_intersect($fingerprint1, $fingerprint2));
                $similarity = (2 * $intersection) / (count($fingerprint1) + count($fingerprint2)) * 100;

                return $similarity;
            }
            function count_intersection($fingerprint1, $fingerprint2)
            {
                $intersection = count(array_intersect($fingerprint1, $fingerprint2));

                return $intersection;
            }
            function intersection($fingerprint1, $fingerprint2)
            {
                $intersection = array_intersect($fingerprint1, $fingerprint2);

                return $intersection;
            }

            // Data input
            $data_input = $request->search;
            $data_sample = Alumni::get();
            $ds_array = $data_sample->toArray();

            foreach ($ds_array as $key => $value) {
                $values = $value['NIM'] . $value['nama'];
                // Preprocessing
                $data_input = preprocess($data_input);
                $data_sample[$key] = preprocess($values);

                // Tokenizing
                $k = 3;
                $tokens_input = tokenize($data_input, $k);
                $tokens_sample = tokenize($data_sample[$key], $k);

                // Hashing (Rolling Hash)
                $fingerprints_input = [];
                $fingerprints_sample = [];

                foreach ($tokens_input as $token) {
                    $fingerprints_input[] = fingerprint($token);
                }

                foreach ($tokens_sample as $token) {
                    $fingerprints_sample[] = fingerprint($token);
                }

                // Similarity
                $similarity = similarity($fingerprints_input, $fingerprints_sample);
                $intersection = count_intersection($fingerprints_input, $fingerprints_sample);
                $arr_intersection = intersection($fingerprints_input, $fingerprints_sample);

                $value['preprocessing'] = $data_sample[$key];
                $value['kgram'] = implode(', ', $tokens_sample);
                $value['kgrams'] = $tokens_sample;
                $value['hashing'] = implode(', ', $fingerprints_sample);
                $value['hashings'] = $fingerprints_sample;
                $value['intersection'] = $intersection;
                $value['arr_intersection'] = $arr_intersection;
                $value['similarity'] = round($similarity, 2);

                // Tampilkan hasil

                $data[] = $value;
                // usort($data, function ($a, $b) {
                //     return $a['similarity'] < $b['similarity'];
                // });
                $count = count($data);
                // if ($similarity > 0) {
                // }
            }
            $inputs = [
                'inputan' => $request->search,
                'inputan_preprocessing' => $data_input,
                'inputan_kgrams' => $tokens_input,
                'inputan_kgram' => implode(', ', $tokens_input),
                'inputan_hash' => $fingerprints_input,
            ];
        }
        $params = [
            'title' => 'Data Alumni | Tracer Study - Universitas Islam Balitar',
            'data_i' => $inputs,
            'data' => $data,
            'count' => $count
        ];

        return view('users.alumni.rabinTable')->with($params);
    }

    public function detail(string $id)
    {
        $al = Alumni::where('id', '=', $id)->get();
        // dd($id);
        $params = [
            'title' => 'Data Alumni | Tracer Study - Universitas Islam Balitar',
            'data' => $al
        ];

        return view('users.alumni.detail')->with($params);
    }
}
