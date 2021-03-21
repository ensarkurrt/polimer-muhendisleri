@extends('layouts.master')

@section('title','İşverenler')


@section('content')

<div class="clearfix"></div>

<section>
    <div class="container">


        <div class="row">
            @component('components.singlejob',['image' => 'bing.png', 'name'=> 'Bing Ltd', 'ago' => 'just now',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=> 'Full
            Time'])
            @endcomponent

            @component('components.singlejob',['image' => 'asana.png', 'name'=> 'Google PVT Ltd', 'ago' => '10 min ago',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=> 'Part
            Time'])
            @endcomponent

            @component('components.singlejob',['image' => 'safari.png', 'name'=> 'safari PVT Ltd', 'ago' => '20 min
            ago',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=>
            'Contract'])
            @endcomponent

            @component('components.singlejob',['image' => 'drive.png', 'name'=> 'Google Drive', 'ago' => '1 days
            ago',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=>
            'Full Time'])
            @endcomponent

            @component('components.singlejob',['image' => 'paypal.png', 'name'=> 'PayPal PVT Ltd', 'ago' => '2 days
            ago',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=>
            'Internship'])
            @endcomponent

            @component('components.singlejob',['image' => 'google.png', 'name'=> 'Google PVT Ltd', 'ago' => '3 days
            ago',
            'position' => 'Frontend Designer For UI/UX Design', 'state' => 'Isva', 'country' => 'Canada', 'type'=>
            'Part Time'])
            @endcomponent

        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="pagination mt-0">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span class="ti-arrow-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">18</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span class="ti-arrow-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Pagination -->

    </div>
</section>
<div class="clearfix"></div>
@endsection
