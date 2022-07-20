<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller
{
    /**
     * Upload file to server and return the file sorted by requried schema
     *
     * @param Request $request
     * @return Response
     */

    public function upload(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'file' => 'required|mimetypes:text/plain',
        ],[
            'file.required' => 'File is required you must upload a file',
            'file.mimetypes' => 'File must be a text file (plain text) only .txt',
        ]);

        // if validation fails return error
        if ($validator->fails()) {
            $responseArr['message'] = $validator->errors();
            return response()->json(
                $responseArr, Response::HTTP_BAD_REQUEST
            );
        }

        // get  file content and store it in a variable
        $fileContents = file_get_contents($request->file('file'));

        // split the file content into an array of lines
        $fileContents = explode("\n", $fileContents);

        // remove empty lines from the array
        $fileContents = array_filter($fileContents, function ($line) {
            return !empty($line);
        });

        // assume file have a one array always
        $fileContents = $fileContents[0];

        // remove all spaces from the file content and spical characters from the file content
        $fileContents = trim($fileContents, " []");

        // replace all simples “ ” with "
        $fileContents = str_replace("“", "", $fileContents);

        $fileContents = str_replace("”", "", $fileContents);

        // convert the file content to an array
        $arrayOfFileContent = explode(",", $fileContents);


        foreach ($arrayOfFileContent as $key => $value) {
            // convert the string to array
            $value = str_replace("{", "", $value); // remove {
            $value = str_replace("}", "", $value); // remove }
            $arrayOfFileContent[$key] = explode(":", $value); // split the string into array
        }

        $newArrayOfFileContent = array();

        foreach ($arrayOfFileContent as $index=>$t) {
            $newArrayOfFileContent[$t[1]][] = $t[0];
        }


        return response()->json(
            $newArrayOfFileContent, Response::HTTP_OK
        );

    }


}
