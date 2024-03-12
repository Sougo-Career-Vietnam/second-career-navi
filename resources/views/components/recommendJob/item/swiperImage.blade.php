@if($arrayFEntJob)
    @foreach($arrayFEntJob as $fEntJob)
    <div class="swiper-slide">
        <a class="" href="{{Route('top')}}/job/{{ $fEntJob->jobId ?? '' }}">
            <div class="recommendJobCols">
                <figure class="recommendJobImg">
                    @if($fEntJob->mainGazoFilePath)
                        <img src="{{asset('storage'.$fEntJob->mainGazoFilePath)}}" alt="{{$fEntJob->jobTitle}}">
                    @else
                        <img src="{{asset('images/noPhoto.png')}}" alt="">
                    @endif
                </figure>
                <div class="recommendJobInfo">
                    <span class="koyktyName indicator{{$fEntJob->koyKeitaiCode}}">{{$fEntJob->koyKeitaiName}}</span>
                    <p class="jobTitle">{{$fEntJob->jobTitle}}</p>
                    <p class="jobArea"><span class="namejobTitle">職種</span><x-search.kinmti :arrayKinmti="$fEntJob->arrayFEntKinmuti" /></p>
                    <p class="jobSyksy"><span class="namejobTitle">給与</span>{{$fEntJob->jobCategoryName}}</p>
                    <p class="jobMoney">
                        <span class="namejobTitle">勤務地</span>
                        @if($fEntJob->kyuyoKbnName && $fEntJob->kyuyoMin)
                            【{{$fEntJob->kyuyoKbnName}}】
                            <x-atoms.salary :kyuyoMin="$fEntJob->kyuyoMin" :kyuyoMax="$fEntJob->kyuyoMax" dispType="char" />
                        @endif
                    </p>
                    <p class="jobTime"><span class="namejobTitle">給与</span>{{$fEntJob->workingTimes}}</p>
                </div>
                <div class="recommendJobInfoAdd">
                    <p class="letter">詳しく見る</p>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="recommendLinkBtn"></div>
            </div>
        </a>
    </div>
    @endforeach
@endif
