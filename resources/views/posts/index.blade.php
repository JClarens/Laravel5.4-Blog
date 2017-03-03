@extends('main')
@section('title','| All Posts')
@section('content')
    <div class="row">
        <div class="col-md-10">
        <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
        <a href='{{ route('posts.create') }}' class="btn btn-lg btn-block btn-primary button-top">Create New Post</a>
        </div>
        <hr>
    </div> <!--end of row-->

    <div class="row">
        <div class="col-md-12"> 
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>

                <tbody>

                    @foreach ($postszzz as $allpost)
                        
                        <tr>
                            <th>{{$allpost->id}}</th>
                            <td>{{$allpost->title}}</td>
                            <td>{{substr($allpost->body, 0, 50)}} {{strlen($allpost->body) > 50 ?"...":""}}</td> <!--ini untuk bikin batasi katrakter sampe 50 aja yang muncul dan titik" dia akhirnya-->
                            <td>{{date('M j, Y',strtotime($allpost->created_at))}}</td><!--ini untuk bikin format tanggalnya bulan tgl, tahun !-->
                            <td>
                            <a href="{{route('posts.show',$allpost->id)}}" class="btn btn-default btn-sm">View</a> <!--karena mau di view makanya liat dari route:list kasi rout nya yg show !-->
                            <a href="{{route('posts.edit',$allpost->id)}}" class="btn btn-default btn-sm">Edit</a>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop