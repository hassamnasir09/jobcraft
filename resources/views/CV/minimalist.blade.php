{{ view('CV.layouts.header') }}

<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            {{-- <div class="row">
                <div class="col-8">
                    <h1 class="m-0">User Profile</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> Home
                    </a>
                </div>
            </div> --}}
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">User CV</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-5" style="background:#eeeeee">



                    {{-- //header --}}
                    <div class="card-header">
                        <h3 class="card-title ">
                            {{ isset($information['personal_info']['first_name']) ?
                            $information['personal_info']['first_name'] : 'Empty' }}
                            {{ isset($information['personal_info']['last_name']) ?
                            $information['personal_info']['last_name'] : '' }}'s
                            Profile
                            <button class="btn btn-success" style="float:right" onclick="exportToPDF()">Export to
                                PDF</button>
                        </h3>



                    </div>
                    {{-- header --}}




                    <!-- FONTS -->
                    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet'
                        type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

                    <!-- PAGE STUFF -->
                    <div class="rela-block page" id="CV">
                        <div class="rela-block top-bar">
                            <div class="caps name">
                                <div class="abs-center"> {{ isset($information['personal_info']['first_name']) ?
                                    $information['personal_info']['first_name'] : '' }}
                                    {{ isset($information['personal_info']['last_name']) ?
                                    $information['personal_info']['last_name'] : '' }}</div>
                            </div>
                        </div>
                        <div class="side-bar">
                            <div class="mugshot">
                                <div class="logo">
                                    <svg viewbox="0 0 80 80" class="rela-block logo-svg">
                                        <path d="M 10 10 L 52 10 L 72 30 L 72 70 L 30 70 L 10 50 Z" stroke-width="2.5"
                                            fill="none" />
                                    </svg>
                                    <p class="logo-text">

                                        {{ isset($information['personal_info']['first_name']) ?
                                        substr($information['personal_info']['first_name'], 0, 1) : 'C' }}
                                        {{ isset($information['personal_info']['last_name']) ?
                                        substr($information['personal_info']['last_name'], 0, 1): 'V' }}

                                    </p>
                                </div>
                            </div>
                            @if (!empty($information['contact_info']['email']))
                            <p>{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] :
                                '' }}</p>

                            @endif
                            @if (!empty($information['contact_info']['phone_number']))
                            <p>{{ isset($information['contact_info']['phone_number']) ?
                                $information['contact_info']['phone_number'] : '' }}</p>
                            @endif
                            @if (!empty($information['contact_info']['website']))
                            <p>{{ isset($information['contact_info']['website']) ?
                                $information['contact_info']['website'] : '' }}</p>
                            @endif
                            @if (!empty($information['contact_info']['linkedin_link']))
                            <p>{{ isset($information['contact_info']['linkedin_link']) ?
                                $information['contact_info']['linkedin_link'] : '' }}</p>
                            @endif
                            @if (!empty($information['contact_info']['github_link']))
                            <p>{{ isset($information['contact_info']['github_link']) ?
                                $information['contact_info']['github_link'] : '' }}</p>
                            @endif
                            @if (!empty($information['contact_info']['twitter']))
                            <p>{{ isset($information['contact_info']['twitter']) ?
                                $information['contact_info']['twitter'] : '' }}</p>
                            @endif
                            <br>

                            <p class="rela-block caps side-header">Expertise</p>



                            @if (!empty($information['skill_info']))

                            @foreach ($information['skill_info'] as $skill_info)
                            <p class="rela-block list-thing">
                                {{ isset($skill_info['skill_name']) ? $skill_info['skill_name'] : '' }}

                            </p>

                            @endforeach
                            @endif




                            <p class="rela-block caps side-header">Education</p>


                            @if (!empty($information['education_info']))

                            @foreach ($information['education_info'] as $education_info)
                            <p class="rela-block list-thing">

                                {{ isset($education_info['degree_title']) ? $education_info['degree_title'] : '' }}
                            </p>
                            @endforeach
                            @endif

                        </div>
                        <div class="rela-block content-container">
                            <h2 class="rela-block caps title">
                                {{ isset($information['personal_info']['profile_title']) ?
                                $information['personal_info']['profile_title'] : '' }}

                            </h2>
                            <div class="rela-block separator"></div>
                            <div class="rela-block caps greyed">Profile</div>
                            <p class="long-margin">
                                @if (!empty($information['personal_info']['about_me']))
                                {{ isset($information['personal_info']['about_me']) ?
                                $information['personal_info']['about_me'] : 'Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Corporis aliquam est harum minima dolorem nisi, et beatae dolorum
                                atque eius necessitatibus molestiae perferendis, ipsum esse.' }}


                                @endif

                            </p>
                            @if (!empty($information['experience_info']))
                            <div class="rela-block caps greyed">Experience</div>



                            @foreach ($information['experience_info'] as $experience_info)
                            <h3> {{ isset($experience_info['job_title']) ? $experience_info['job_title'] : '' }}</h3>
                            <p class="light">
                                {{ isset($experience_info['job_start_date']) ? $experience_info['job_start_date'] : ''
                                }}
                                -
                                {{ isset($experience_info['job_end_date']) ? $experience_info['job_end_date'] : '' }}
                            </p>
                            <p class="justified">{{ isset($experience_info['job_description']) ?
                                $experience_info['job_description'] : '' }} </p>
                            @endforeach

                            @endif




                        </div>
                    </div>


                    <style>
                      

                        .rela-block {
                            display: block;
                            position: relative;
                            margin: auto;
                            top: ;
                            left: ;
                            right: ;
                            bottom: ;
                        }

                        .rela-inline {
                            display: inline-block;
                            position: relative;
                            margin: auto;
                            top: ;
                            left: ;
                            right: ;
                            bottom: ;
                        }

                        .floated {
                            display: inline-block;
                            position: relative;
                            margin: false;
                            top: ;
                            left: ;
                            right: ;
                            bottom: ;
                            float: left;
                        }

                        .abs-center {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: 50%;
                            left: 50%;
                            right: false;
                            bottom: false;
                            transform: translate(-50%, -50%);
                            text-align: center;
                            width: 88%;
                        }

                        body {
                            font-family: 'Open Sans';
                            font-size: 18px;
                            letter-spacing: 0px;
                            font-weight: 400;
                            line-height: 28px;
                            background: url("http://kingofwallpapers.com/leaves/leaves-016.jpg") right no-repeat;
                            background-size: cover;
                        }

                        body:before {
                            content: "";
                            display: false;
                            position: fixed;
                            margin: 0;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: rgba(255, 255, 255, 0.92);
                        }

                        .caps {
                            text-transform: uppercase;
                        }

                        .justified {
                            text-align: justify;
                        }

                        p.light {
                            color: #777;
                        }

                        h2 {
                            font-family: 'Open Sans';
                            font-size: 30px;
                            letter-spacing: 5px;
                            font-weight: 600;
                            line-height: 40px;
                            color: #000;
                        }

                        h3 {
                            font-family: 'Open Sans';
                            font-size: 21px;
                            letter-spacing: 1px;
                            font-weight: 600;
                            line-height: 28px;
                            color: #000;
                        }

                        .page {
                            width: 90%;
                            max-width: 1200px;
                            margin: 80px auto;
                            background-color: #fff;
                            box-shadow: 6px 10px 28px 0px rgba(0, 0, 0, 0.4);
                        }

                        .top-bar {
                            height: 220px;
                            background-color: #848484;
                            color: #fff;
                        }

                        .name {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: false;
                            left: calc(350px + 5%);
                            right: 0;
                            bottom: 0;
                            height: 120px;
                            text-align: center;
                            font-family: 'Raleway';
                            font-size: 58px;
                            letter-spacing: 8px;
                            font-weight: 100;
                            line-height: 60px;
                        }

                        .name div {
                            width: 94%;
                        }

                        .side-bar {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: 60px;
                            left: 5%;
                            right: false;
                            bottom: 0;
                            width: 350px;
                            background-color: #f7e0c1;
                            padding: 320px 30px 50px;
                        }

                        .mugshot {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: 50px;
                            left: 70px;
                            right: false;
                            bottom: false;
                            height: 210px;
                            width: 210px;
                        }

                        .mugshot .logo {
                            margin: -23px;
                        }

                        .logo {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: 0;
                            left: 0;
                            right: false;
                            bottom: false;
                            z-index: 100;
                            margin: 0;
                            color: #000;
                            height: 250px;
                            width: 250px;
                        }

                        .logo .logo-svg {
                            height: 100%;
                            width: 100%;
                            stroke: #000;
                            cursor: pointer;
                        }

                        .logo .logo-text {
                            display: false;
                            position: absolute;
                            margin: false;
                            top: 58%;
                            left: ;
                            right: 16%;
                            bottom: ;
                            cursor: pointer;
                            font-family: "Montserrat";
                            font-size: 55px;
                            letter-spacing: 0px;
                            font-weight: 400;
                            line-height: 58.333333333333336px;
                        }

                        .social {
                            padding-left: 60px;
                            margin-bottom: 20px;
                            cursor: pointer;
                        }

                        .social:before {
                            content: "";
                            display: false;
                            position: absolute;
                            margin: false;
                            top: -4px;
                            left: 10px;
                            right: false;
                            bottom: false;
                            height: 35px;
                            width: 35px;
                            background-size: cover !important;
                        }

                        .social.twitter:before {
                            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Twitter-07-128.png") center no-repeat;
                        }

                        .social.pinterest:before {
                            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_Pinterest-23-128.png") center no-repeat;
                        }

                        .social.linked-in:before {
                            background: url("https://cdn3.iconfinder.com/data/icons/social-media-2026/60/Socialmedia_icons_LinkedIn-128.png") center no-repeat;
                        }

                        .side-header {
                            font-family: 'Open Sans';
                            font-size: 18px;
                            letter-spacing: 4px;
                            font-weight: 600;
                            line-height: 28px;
                            margin: 60px auto 10px;
                            padding-bottom: 5px;
                            border-bottom: 1px solid #888;
                        }

                        .list-thing {
                            padding-left: 25px;
                            margin-bottom: 10px;
                        }

                        .content-container {
                            margin-right: 0;
                            width: calc(95% - 350px);
                            padding: 25px 40px 50px;
                        }

                        .content-container>* {
                            margin: 0 auto 25px;
                        }

                        .content-container>h3 {
                            margin: 0 auto 5px;
                        }

                        .content-container>p.long-margin {
                            margin: 0 auto 50px;
                        }

                        .title {
                            width: 80%;
                            text-align: center;
                        }

                        .separator {
                            width: 240px;
                            height: 2px;
                            background-color: #999;
                        }

                        .greyed {
                            background-color: #ddd;
                            width: 100%;
                            max-width: 580px;
                            text-align: center;
                            font-family: 'Open Sans';
                            font-size: 18px;
                            letter-spacing: 6px;
                            font-weight: 600;
                            line-height: 28px;
                        }

                        @media screen and (max-width: 1150px) {
                            .name {
                                color: #fff;
                                font-family: 'Raleway';
                                font-size: 38px;
                                letter-spacing: 6px;
                                font-weight: 100;
                                line-height: 48px;
                            }
                        }
                    </style>




                </div>
            </div>
        </div>








    </div>
</div>
</div>
<!-- /.row -->
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


<script>
    window.jsPDF = window.jspdf.jsPDF;

    function exportToPDF() {
        const element = document.getElementById('CV');

html2canvas(element, { scale: 2 }).then(canvas => {
  const imgData = canvas.toDataURL('image/png');
  const pdf = new jsPDF('p', 'mm', 'a4');
  pdf.addImage(imgData, 'PNG', 0, 0, 210, 297); // A4 size: 210x297 mm
  pdf.save('exported-cv.pdf');
});
    }
</script>
{{ view('CV.layouts.footer') }}