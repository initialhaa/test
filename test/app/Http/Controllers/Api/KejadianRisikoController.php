<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KejadianRisikoController extends Controller
{
    public function index()
    {
        $data = [
            "DetailKejadianRisikoOperasional" => [
                "id" => "1609227754-u4t8-cck1-w18p7azbr",
                "payloads" => [
                    "BulanPelaporan" => [
                        "id" => "1617779234-f0oy-phln-ppl0u1qx5",
                        "type" => "radio_button",
                        "description" => "Pilih bulan pelaporan",
                        "options" => [
                            "Januari",
                            "Februari",
                            "Maret",
                            "April",
                            "Mei",
                            "Juni",
                            "Juli",
                            "Agustus",
                            "September",
                            "Oktober",
                            "November",
                            "Desember"
                        ],
                        "answer" => "Januari"
                    ],
                    "Quarter" => [
                        "id" => "1617779337-7t2y-gmj9-0nid0p04n",
                        "type" => "radio_button",
                        "description" => "Pilih Quarter",
                        "options" => ["Q1", "Q2", "Q3", "Q4"],
                        "answer" => "Q1"
                    ],
                    "TanggalKejadian" => [
                        "id" => "1617779372-kgyo-zi4q-a3cxrkbox",
                        "type" => "text",
                        "description" => "Isi tanggal kejadian",
                        "answer" => "2019-01-11"
                    ],
                    "TanggalDitemukan" => [
                        "id" => "1617779391-zrmm-v4bx-t4eg9g8sq",
                        "type" => "text",
                        "description" => "Isi tanggal ditemukan",
                        "answer" => "2020-01-23"
                    ],
                    "DeskripsiKejadian" => [
                        "id" => "1617779413-vfec-odq8-8m3nm00u7",
                        "type" => "long_text",
                        "description" => "Jelaskan dengan detail kronologis kejadian",
                        "answer" => "Terdapat selisih angsuran hutang pokok fasilitas pembiayaan a.n PT Mitratel pada sistem arium dibandingkan jadwal pada PK sebesar Rp. 2000 pada 3 periode."
                    ],
                    "DeskripsiPenyebab" => [
                        "id" => "1617779435-k7j8-6aai-ma0ye5989",
                        "type" => "long_text",
                        "description" => "Jelaskan dengan detail root cause kejadian",
                        "answer" => "Penjadwalan angsuran menggunakan presentase dari nilai pokok saat pencairan, bukan angka nominal sehingga mengakibatkan nilai angsuran per periode menjadi kelebihan 2rb rupiah."
                    ]
                ]
            ],
            "DetailKerugian" => [
                "id" => "1609230421-hnjo-h8h0-xwuwcsu3z",
                "payloads" => [
                    "TerkenaDampak" => [
                        "id" => "1617779535-70rw-phgu-z775zzpti",
                        "type" => "checkbox",
                        "description" => "Pilih divisi yang terkena dampak dari risiko ini",
                        "options" => [
                            "DSP",
                            "DSDM",
                            "DP2",
                            "DPPU1",
                            "DPPU2",
                            "DAA",
                            "DTI",
                            "DEPI",
                            "DAI",
                            "DRE",
                            "DPB",
                            "DPP",
                            "DPPU3",
                            "DPOP",
                            "DPPIK",
                            "DPKMI",
                            "DP1",
                            "DUS",
                            "DJK",
                            "DKHI",
                            "DUP",
                            "DMRT",
                            "DELST",
                            "DH"
                        ],
                        "answer" => ["DAA", "DP1"]
                    ],
                    "KerugianFinancial" => [
                        "id" => "1619062854-ec0x-333o-6m0mla3t7",
                        "type" => "text",
                        "description" => "Besarnya kerugian financial Perseroan",
                        "answer" => "-"
                    ],
                    "PotensialKerugianFinancial" => [
                        "id" => "1619062883-xsov-yboj-1hjgvgasn",
                        "type" => "text",
                        "description" => "Besarnya kerugian finansial yang diperkirakan akan menjadi kerugian Perseroan",
                        "answer" => "6000"
                    ],
                    "Status" => [
                        "id" => "1619062915-kswm-8e5b-y9rvij69s",
                        "type" => "text",
                        "description" => "Isi status detail kerugian",
                        "answer" => "Recovery"
                    ],
                    "KerugianNonFinancial" => [
                        "id" => "1619062939-9vfj-cdbo-0qq6omq7h",
                        "type" => "long_text",
                        "description" => "Kejadian risiko operasional yang terjadi pada Perseroan, menimbulkan exposure risiko non finansial",
                        "answer" => "Perbedaan angsuran hutang pokok antara perjanjian pembiayaan dengan sistem arium, pencatatan outstanding fasilitas pembiayaan menjadi tidak sesuai dengan perjanjian pembiayaan."
                    ]
                ]
            ]
        ];

        return response()->json($data);
    }
}
