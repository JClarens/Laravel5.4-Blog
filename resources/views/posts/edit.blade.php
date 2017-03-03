@extends ('main')
@section('title','| Edit Blog Post')
@section('content')
<div class="row">
{!! Form::model($post, ['route'=> ['posts.update',$post->id], 'method'=>'PUT']) !!}   <!--parameter 1 objek model. param 2 method nya. param 3 karena ada error. di ambil dari database tampilkan ketika tekan tombl edit-->
        <div class="col-md-8">
          <!--<h1>{{ $post->title }}</h1>-->
          {{ Form::label('title','Title:') }}
          {{ Form::text('title', null, ["class"=> 'form-control input-lg']) }}
          <!--<p class="lead">{{ $post->body }}</p>-->
          
          {{Form::label('body','Body:', ["class"=>'form-spacing-top'] )}}
          {{ Form::textarea('body', null, ["class"=>'form-control']) }}
    </div>

    <div class="col-md-4">
        <div class="well">
           <dl class="dl-horizontal">
              <dt>Created at:</dt>
              <dd>{{date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
        
          <div class="row">
              <div class="col-sm-6">
                  {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                  <!--<a href="#" class="btn btn-primary btn-block">Edit</a>-->
              </div>
              <div class="col-sm-6">
                {{ Form::submit('Save Change', ["class"=>'btn btn-success btn block']) }}
                  <!--{!! Html::linkRoute('posts.update', 'Save Change', array($post->id), array('class'=>'btn btn-success btn-block')) !!}-->
                  <!--<a href="#" class="btn btn-danger btn-block">Delete</a>-->
              </div>
          </div>  
        </div>
    </div>
    {!! Form::close() !!}
</div>
@stop

