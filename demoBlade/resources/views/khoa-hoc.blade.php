@extends ('layout-main')

@section('main-content')
<?php
if(isset($_GET['id'])){
    echo "Khóa học có id là: ";
    echo $_GET['id'];
}else{
    
}
 ?>
@endsection

@section('title')
 Khóa học
@endsection