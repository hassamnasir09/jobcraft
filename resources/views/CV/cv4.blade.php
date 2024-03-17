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

  <div class="container-fluid" >
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




          <div class="resume" id="CV">

            <header>
              <h1>

                {{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : ''
                }}
                {{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : ''
                }}
              </h1>
              <div class="job-titles">
                {{ isset($information['personal_info']['profile_title']) ?
                $information['personal_info']['profile_title'] : '' }}
              </div>
              <div class="contact-info">
                @if (!empty($information['contact_info']['email']))
                <a
                  href="mailto:john@elmsoftware.com?subject=Saw your resume online...">{{$information['contact_info']['email']}}</a><br />

                @endif
                @if (!empty($information['contact_info']['phone_number']))
                <a
                  href="tel:{{$information['contact_info']['phone_number']}}">{{$information['contact_info']['phone_number']}}</a><br />

                @endif

              </div>
            </header>

            <div class="info">

              <section role="main">










                @if (!empty($information['project_info']))
                @if (!empty($information['personal_info']['about_me']))

                <article class="work">
                  <h1>CAREER PROFILE</h1>
                  <p>
                    {{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis aliquam est harum minima dolorem nisi, et beatae dolorum atque eius necessitatibus molestiae perferendis, ipsum esse.' }}

                  </p>
                </article>

@endif
@endif




                @if (!empty($information['project_info']))
                <article class="work">
                  <h1>Projects</h1>
                  @foreach ($information['project_info'] as $project_info)


                  <div class="block">
                    <h2>{{ isset($project_info['project_title']) ? $project_info['project_title'] : '' }}</h2>
                    <p> {{ isset($project_info['project_description']) ? $project_info['project_description'] : '' }}
                    </p>

                  </div>



                  @endforeach
                </article>
                @endif








                @if (!empty($information['education_info']))
                <article class="education">
                  <h1>Education</h1>
                  @foreach ($information['education_info'] as $education_info)

                  <div class="block">
                    <h2>{{ isset($education_info['degree_title']) ? $education_info['degree_title'] : '' }}</h2>
                    <p>{{ isset($education_info['institute']) ? $education_info['institute'] : ''
                      }}<br />{{ isset($education_info['edu_start_date']) ? $education_info['edu_start_date'] : '' }} -
                      {{
                      isset($education_info['edu_end_date']) ? $education_info['edu_end_date'] : '' }}</p>
                    <p> {{ isset($education_info['education_description']) ? $education_info['education_description'] :
                      '' }}
                    </p>
                  </div>




          




            @endforeach
            <!--//item-->
            </article>
            @endif



           
            </article>
            </section>

            <aside>
              <article>



                @if (!empty($information['skill_info']))
                <h1>SKILLS & PROFICIENCY</h1>

                        @foreach ($information['skill_info'] as $skill_info)
                        <p>  {{ isset($skill_info['skill_name']) ? $skill_info['skill_name'] : '' }}
                          <span style="margin-left:100px">
                            {{ isset($skill_info['skill_percentage']) ? $skill_info['skill_percentage'] : '0' }}
                          </span>
                        </p>

                           
                        @endforeach
                 
            @endif









              </article>
              <article>




                @if (!empty($information['language_info']))
                <h1>Languages</h1>
                        @foreach ($information['language_info'] as $language_info)
                       
                        <p><a href="#">{{ isset($language_info['language']) ? $language_info['language'] : '' }}
                        
                        <span style="margin-left:100px">
                          ({{ isset($language_info['language_level']) ? $language_info['language_level'] : '' }})

                        </span>
                        </a></p>


                          
                        @endforeach
                
            @endif



               
               
              </article>
              <article>

                @if (!empty($information['interest_info']))
                <h1>Hobbies</h1>

                        @foreach ($information['interest_info'] as $interest_info)
                        <p>
                                {{ isset($interest_info['interest']) ? $interest_info['interest'] : '' }}
                        </p>
                        @endforeach
                 
            @endif
           
              </article>
            </aside>

          </div><!-- CV -->

        </div><!-- That's a wrap -->





      </div>
    </div>
  </div>

  <style>
    @charset "UTF-8";
    /* Fonts */
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400);
    @import url(https://fonts.googleapis.com/css?family=Bitter:400,700);

    /* Colors */
    /* Sizes */
    /* Media Query Breakpoint */
    /* Header Arrow Effect */
    /* Typography */
    h1,
    h2,
    h3 {
      font-family: Bitter, serif;
    }

    h1 {
      color: #333;
      font-size: 190%;
    }

    h2 {
      color: #707070;
    }

    ul {
      list-style: none;
      margin-left: -1.1em;
    }

    li {
      margin-bottom: 10px;
      position: relative;
    }

    li:before {
      content: '✓';
      position: absolute;
      left: -20px;
    }

    a {
      color: #db4747;
      -moz-transition: all 0.2s ease;
      -o-transition: all 0.2s ease;
      -webkit-transition: all 0.2s ease;
      transition: all 0.2s ease;
    }

    a:hover,
    a:focus {
      color: #c82727;
    }

    .clearfix,
    header,
    .info {
      display: table;
      content: '';
      clear: both;
    }

    /* Box Model */
    *,
    *:after,
    *:before {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      background: #CAE5E7;
      color: #333;
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
    }

    .resume {
      position: relative;
      background: white;
      width: 80%;
      max-width: 1200px;
      margin: 0 auto 50px;
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), inset 0 0 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 58em) {
      .resume {
        width: 96%;
      }
    }

    header {
      position: relative;
      background: #3b8fb8;
      width: 100%;
      overflow: hidden;
      height: 90px;
      text-shadow: 1px 2px 3px #304a63;
    }

    header h1 {
      position: relative;
      font-family: 'Bitter', serif;
      font-size: 250%;
      background: #28627d;
      color: white;
      margin: 0;
      height: 90px;
      padding-top: 15px;
      padding-left: 35px;
      padding-right: 30px;
      float: left;
      z-index: 2;
    }

    @media (max-width: 75em) {
      header h1 {
        width: 100%;
        padding-right: 5px;
      }
    }

    @media (max-width: 36em) {
      header h1 span {
        display: none;
      }
    }

    header h1:after {
      position: absolute;
      content: '';
      height: 100%;
      border-top: 45px solid transparent;
      border-bottom: 45px solid transparent;
      border-left: 20px solid #28627d;
      right: -20px;
      top: 0;
    }

    header div {
      position: relative;
      color: white;
      float: left;
      padding-top: 24px;
      padding-left: 60px;
      padding-right: 48px;
      height: 90px;
    }

    @media (max-width: 75em) {
      header div {
        width: 50%;
      }
    }

    @media (max-width: 36em) {
      header div {
        width: 100%;
        padding-left: 30px;
      }
    }

    header div:first-of-type {
      background: #2e779c;
      z-index: 1;
    }

    header div:first-of-type:after {
      position: absolute;
      content: '';
      height: 100%;
      border-top: 45px solid transparent;
      border-bottom: 45px solid transparent;
      border-left: 20px solid #2e779c;
      right: -20px;
      top: 0;
    }

    @media (max-width: 75em) {
      header div:first-of-type {
        padding-left: 30px;
      }
    }

    header a {
      color: white;
      padding: 0 3px;
      border-radius: 2px;
      text-decoration: none;
    }

    header a:hover,
    header a:focus {
      color: white;
      background: #00baa6;
    }

    .info {
      width: 100%;
    }

    section {
      float: left;
      width: 70%;
      padding: 0 30px;
    }

    section article {
      margin-bottom: 30px;
    }

    section h2 {
      font-size: 100%;
      text-transform: uppercase;
      margin-bottom: 0;
    }

    section h2 span {
      text-transform: none;
    }

    section p {
      line-height: 1.5;
    }

    section .education p {
      margin-top: 3px;
    }

    @media (max-width: 58em) {
      section {
        width: 100%;
      }
    }

    .work .block {
      margin-bottom: 30px;
    }

    aside {
      float: left;
      background: whitesmoke;
      border-left: 1px solid #ccc;
      width: 30%;
      padding-left: 30px;
      padding-right: 30px;
    }

    aside article {
      margin-bottom: 50px;
    }

    aside h1 {
      font-size: 150%;
      margin-top: 29px;
    }

    aside a {
      color: #333;
      text-decoration: none;
      border-bottom: 1px dashed gainsboro;
    }

    aside a:hover,
    aside a:focus {
      background: #e8e8e8;
    }

    @media (max-width: 58em) {
      aside {
        width: 100%;
        border-left: none;
        border-top: 1px solid #ccc;
      }
    }
  </style>







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