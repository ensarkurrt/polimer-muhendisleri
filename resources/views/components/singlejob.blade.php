<!-- Single Job -->
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="classic-joblist ultimate-center">

        <div class="cl-job-employer">
            <div class="cljb-emp-thumg">
                <a href="job-detail.html"><img src="{{asset('img/' . $image)}}" alt=""></a>
            </div>
            <div class="cljb-emp-detail">
                <h5><a href="employer-detail.html" {{$name}}</a> </h5> <span class="cljb-date">{{$ago}}</span>
            </div>
        </div>

        <h4 class="job-title"><a href="job-detail.html">{{$position}}</a></h4>

        <div class="cl-job-intro">
            <span class="cl-jb-loaction"><i class="ti-location-pin"></i>{{$state}}, {{$country}}</span>
            <span class="cl-jb-type {{strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $type)))}}">{{$type}}</span>
        </div>
        {{-- full-time // part-time // contract --}}
    </div>
</div>
