<div class="col-12 col-md-4 col-sm-4 col-xs-12">
    <div class="cgmi___sermon_section_second_div_video_book">
        <div>
            <audio controls controlsList="nodownload">
                <source src="{{ $message->audio }}" type="audio/mpeg">
                Your browser does not support the audio tag.
            </audio>
            <h4>{{ $message->title }}</h4>
            <div style="width:100%; display:flex;">
                <span class="btn btn-primary btn-sm" style="margin-left:auto;"
                    onclick="share('{{ $message->title }}', '{{ route('index') . '/' . $message->audio }}')"
                    id="shareBtn">SHARE</span>
            </div>
        </div>
    </div>
</div>
