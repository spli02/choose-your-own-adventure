@extends('layouts.app')

@section('content')

    <div class="chapterArea" style="padding:2rem 5rem">
        @if($chapter->is_end=='1')
            <h1>The End</h1>
        @else
        
            @if(isset($illustration->filename))
                <img src="{{asset('img/'.$illustration->filename)}}" alt="picture">
            @endif
            
            <?= htmlspecialchars_decode($chapter->text) ?>
            <br>

            @foreach($choices as $choice)
                <a href="{{ $choice->goto_id }}">
                    {{ $choice->text }}
                </a><br>
            @endforeach

            <br>Or<br><br>
            <a href="../home">
                Save the game & Back to the top.
            </a>
            <?php $now = url()->current(); 
            session()->put(['url' => $now]);?>
        @endif
    </div>

@endsection