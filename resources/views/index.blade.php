@extends('layouts.app')

@section('content')

    <div class="chapterArea" style="padding:2rem 5rem">

        @if(isset($illustration->filename))
            <img src="{{asset('img/'.$illustration->filename)}}" alt="picture">
        @endif

        <p>
            <?= htmlspecialchars_decode($chapter->text) ?>
        </p>

        @foreach($choices as $choice)
                <p>
                    <button type="button" class="btn btn-sm" style="background-color:#BB4A2B;">
                        <a href="{{ $choice->goto_id }}" style="text-decoration: none; color:white;">
                                {{ $choice->text }}
                        </a>
                    </button>
                </p>
        @endforeach

            <p>or</p>

            <p>
                <button type="button" class="btn btn-sm" style="background-color:#DBB29F;">
                    <a href="/home" style="text-decoration: none; color:black;">
                        Save this game & Back to top
                    </a>
                </button>
            </p>

        <?php $now = url()->current();
        session()->put(['url' => $now]);?>
    </div>

@endsection
