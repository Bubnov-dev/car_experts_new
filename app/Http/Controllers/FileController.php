<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    public function storeFiles(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'files.*' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $uploadedFiles = $request->file('files');
        $storedFiles = [];

        foreach ($uploadedFiles as $file) {
            // Create a new unique filename
            $filename = uniqid() . '_' . $file->getClientOriginalName();

            // Determine the file mime type
            $mime = $file->getMimeType();

            // Compress the file if it's an image
            if (strpos($mime, 'image/') === 0) {
                $image = Image::make($file)->encode('jpg', 50);
                $filename = pathinfo($filename, PATHINFO_FILENAME) . '.jpg';
                $image->save(storage_path('app/public/' . $filename));
            } else {
                // If it's not an image, just move the file to the storage directory
                $file->storeAs('public', $filename);
            }

            // Save the file info to the database
            $newFile = new File;
            $newFile->name = $filename;
            $newFile->path = '/storage/app/public/' . $filename;
            $newFile->save();

            $storedFiles[] = $newFile;
        }

        return response()->json($storedFiles);
    }

    public function storeFile(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        // Get the uploaded file from the request
        $file = $request->file('file');
        Log::info($file->getClientMimeType());

        // Create a new unique filename
        $filename = uniqid() . '_' . $file->getClientOriginalName();

        // Determine the file mime type
        $mime = $file->getMimeType();

        // Compress the file if it's an image
        if (strpos($mime, 'image/') === 0) {
            Log::info('it is image');
            $image = Image::make($file)->encode('jpg', 50);
            $filename = pathinfo($filename, PATHINFO_FILENAME) . '.jpg';
            $image->save(storage_path('app/public/' . $filename));
        } else {
            // If it's not an image, just move the file to the storage directory
            Log::info('it not image');

            $file->storeAs('public', $filename);
        }

        // Save the file info to the database
        $newFile = new File;
        $newFile->name = $filename;
        $newFile->path = '/storage/app/public/' . $filename;
        $newFile->save();

        return response()->json($newFile);
    }
}
