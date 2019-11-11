<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtlController extends Controller
{
    public function plain()
    {
        return response('This is plain response.')->header('Content-Type', 'text/plain');
    }

    public function html()
    {
        return response('This is html response.')->header('Content-Type', 'text/html');
    }

    public function tohtml()
    {
        return redirect('ctl/html');
    }

    public function togoogle()
    {
        return redirect()->away('https://google.com');
    }

    public function toviewbook()
    {
        return redirect()->route('bookview', [ 'id' => 1 ]);
    }

    public function json()
    {
        return response()->json($this->_getDummyDataArray());
    }

    public function downloadCsv()
    {
        return response()->streamDownload(function () {
            echo $this->_getDummyDataCsv();
        }, 'download.csv', [ 'Content-Type' => 'text/csv' ]);
    }

    private function _getDummyDataArray()
    {
        return [
            [
                'id'   => 1,
                'name' => 'Ichiro Suzuki',
            ],
            [
                'id'   => 2,
                'name' => 'Hideki Matsui',
            ],
            [
                'id'   => 3,
                'name' => 'Daisuke Matsuzaka',
            ],
        ];
    }

    private function _getDummyDataCsv()
    {
        $data = $this->_getDummyDataArray();
        $csv  = [];
        foreach ($data as $row) {
            $csv[] = sprintf("%s,%s", $row['id'], $row['name']);
        }

        return implode("\n", $csv);
    }
}
