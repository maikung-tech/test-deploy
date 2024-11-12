<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }
    public function fileStorageServe($file_path)
    {
        if (!Storage::disk('local')->exists($file_path)) {
            abort(404);
        }
        $local_path = config('filesystems.disks.local.root') . DIRECTORY_SEPARATOR . $file_path;
        return response()->file($local_path);
    }
    // public function downloadFile($file)
    // {
    //     return $file;
    //     return Storage::download('/patient/patient_q6w8DvPanJ47/16286077660.png');
    //     // // We should do our authentication/authorization checks here
    //     // // We assume you have a FileModel with a defined belongs to User relationship.
    //     // if(Auth::user() && Auth::id() === $file->user->id) {
    //     //     // filename should be a relative path inside storage/app to your file like 'userfiles/report1253.pdf'

    //     // }else{
    //     //     return abort('403');
    //     // }
    // }

}
