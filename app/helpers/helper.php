<?php


if(!function_exists('addMedia')){
    function addMedia($file,$loc){
        $img_name = $file->getClientOriginalName();
        $filename = date('his') . '-' . $img_name;
        $img_name = $file->storePubliclyAs($filename,'public');
        return '/storage/'.$img_name;
    }
}

// Use Image;
if(!function_exists('create_thumbnail')){

    function create_thumbnail($file){

        $image = $file;
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = storage_path().'/app/public/thumbnail';

        $imgFile = Image::make($image->getRealPath());
        $imgFile->resize(350,200, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['file']);

        return $input['file'];
    }
}

if(!function_exists('update_thumbnail')){

    function update_thumbnail($old_file,$file){
        if(Illuminate\Support\Facades\Storage::delete('public/thumbnail/'.$old_file)){
            return create_thumbnail($file);
        }
        else {
            return redirect()->back()->with('delete','Fail to Update File');
        }
    }
}

if(!function_exists('updateMedia')){
    function updateMedia($oldFile,$file,$loc){
        $old = pathinfo($oldFile,PATHINFO_BASENAME);
        //echo $file_name;
        // echo 'public/'.$loc.'/'.$old;
        if(Illuminate\Support\Facades\Storage::delete('public/'.$loc.'/'.$old)){
            return addMedia($file,$loc);
        }
        else {
            return redirect()->back()->with('delete','Fail to Update File');
        }
    }
}

if(!function_exists('getCateTag')){
    function getTagName($id){
        $cat =  App\Models\category::select('name')->where('id',$id)->get();
        return $cat;
    }
}

if(!function_exists('deleteMedia')){
    function deleteMedia(){
       //////
    }
}