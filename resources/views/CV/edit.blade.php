{{ view('CV.layouts.header') }}
@php
    $languages_list = array(
    "Afrikaans",
    "Albanian - shqip",
    "Amharic - አማርኛ",
    "Arabic - العربية",
    "Aragonese - aragonés",
    "Armenian - հայերեն",
    "Asturian - asturianu",
    "Azerbaijani - azərbaycan dili",
    "Basque - euskara",
    "Belarusian - беларуская",
    "Bengali - বাংলা",
    "Bosnian - bosanski",
    "Breton - brezhoneg",
    "Bulgarian - български",
    "Catalan - català",
    "Central Kurdish - کوردی (دەستنوسی عەرەبی)",
    "Chinese - 中文",
    "Chinese (Hong Kong) - 中文（香港）",
    "Chinese (Simplified) - 中文（简体）",
    "Chinese (Traditional) - 中文（繁體）",
    "Corsican",
    "Croatian - hrvatski",
    "Czech - čeština",
    "Danish - dansk",
    "Dutch - Nederlands",
    "English",
    "English (Australia)",
    "English (Canada)",
    "English (India)",
    "English (New Zealand)",
    "English (South Africa)",
    "English (United Kingdom)",
    "English (United States)",
    "Esperanto - esperanto",
    "Estonian - eesti",
    "Faroese - føroyskt",
    "Filipino",
    "Finnish - suomi",
    "French - français",
    "French (Canada) - français (Canada)",
    "French (France) - français (France)",
    "French (Switzerland) - français (Suisse)",
    "Galician - galego",
    "Georgian - ქართული",
    "German - Deutsch",
    "German (Austria) - Deutsch (Österreich)",
    "German (Germany) - Deutsch (Deutschland)",
    "German (Liechtenstein) - Deutsch (Liechtenstein)",
    "German (Switzerland) - Deutsch (Schweiz)",
    "Greek - Ελληνικά",
    "Guarani",
    "Gujarati - ગુજરાતી",
    "Hausa",
    "Hawaiian - ʻŌlelo Hawaiʻi",
    "Hebrew - עברית",
    "Hindi - हिन्दी",
    "Hungarian - magyar",
    "Icelandic - íslenska",
    "Indonesian - Indonesia",
    "Interlingua",
    "Irish - Gaeilge",
    "Italian - italiano",
    "Italian (Italy) - italiano (Italia)",
    "Italian (Switzerland) - italiano (Svizzera)",
    "Japanese - 日本語",
    "Kannada - ಕನ್ನಡ",
    "Kazakh - қазақ тілі",
    "Khmer - ខ្មែរ",
    "Korean - 한국어",
    "Kurdish - Kurdî",
    "Kyrgyz - кыргызча",
    "Lao - ລາວ",
    "Latin",
    "Latvian - latviešu",
    "Lingala - lingála",
    "Lithuanian - lietuvių",
    "Macedonian - македонски",
    "Malay - Bahasa Melayu",
    "Malayalam - മലയാളം",
    "Maltese - Malti",
    "Marathi - मराठी",
    "Mongolian - монгол",
    "Nepali - नेपाली",
    "Norwegian - norsk",
    "Norwegian Bokmål - norsk bokmål",
    "Norwegian Nynorsk - nynorsk",
    "Occitan",
    "Oriya - ଓଡ଼ିଆ",
    "Oromo - Oromoo",
    "Pashto - پښتو",
    "Persian - فارسی",
    "Polish - polski",
    "Portuguese - português",
    "Portuguese (Brazil) - português (Brasil)",
    "Portuguese (Portugal) - português (Portugal)",
    "Punjabi - ਪੰਜਾਬੀ",
    "Quechua",
    "Romanian - română",
    "Romanian (Moldova) - română (Moldova)",
    "Romansh - rumantsch",
    "Russian - русский",
    "Scottish Gaelic",
    "Serbian - српски",
    "Serbo - Croatian",
    "Shona - chiShona",
    "Sindhi",
    "Sinhala - සිංහල",
    "Slovak - slovenčina",
    "Slovenian - slovenščina",
    "Somali - Soomaali",
    "Southern Sotho",
    "Spanish - español",
    "Spanish (Argentina) - español (Argentina)",
    "Spanish (Latin America) - español (Latinoamérica)",
    "Spanish (Mexico) - español (México)",
    "Spanish (Spain) - español (España)",
    "Spanish (United States) - español (Estados Unidos)",
    "Sundanese",
    "Swahili - Kiswahili",
    "Swedish - svenska",
    "Tajik - тоҷикӣ",
    "Tamil - தமிழ்",
    "Tatar",
    "Telugu - తెలుగు",
    "Thai - ไทย",
    "Tigrinya - ትግርኛ",
    "Tongan - lea fakatonga",
    "Turkish - Türkçe",
    "Turkmen",
    "Twi",
    "Ukrainian - українська",
    "Urdu - اردو",
    "Uyghur",
    "Uzbek - o‘zbek",
    "Vietnamese - Tiếng Việt",
    "Walloon - wa",
    "Welsh - Cymraeg",
    "Western Frisian",
    "Xhosa",
    "Yiddish",
    "Yoruba - Èdè Yorùbá",
    "Zulu - isiZulu"
);
@endphp
<div class="content-wrapper mt-4">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <h1 class="m-0">Edit User Profile</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('index') }}" class="add-btn">
                        <i class="fa fa-home"></i>
                        <br> Home
                    </a>
                    <button onclick="saverecord()" class="save-btn">
                        <i class="fa fa-save"></i>
                        <br> Save
                    </button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ul class="page-breadcrumb breadcrumb">
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><i class="fas fa-angle-right"></i></li>
                        <li class="breadcrumb-item">Edit User Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h3 class="card-title">Edit user Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 p-md-5 p-sm-4 p-3">
                                <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Personal Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Personal Information</h2>
                                            <div class="form-outline mb-4">
                                                <input type="hidden" id="user_id" name="user_id" class="form-control"
                                                    value="{{ isset($information['personal_info']['id']) ? $information['personal_info']['id'] : '' }}" />
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12">
                                                            <div class="col-12">
                                                                <div class="form-outline mb-4">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">First
                                                                        name</label>
                                                                    <input type="text" id="first_name"
                                                                        name="first_name" placeholder="First name"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Last
                                                                        name</label>
                                                                    <input type="text" id="last_name"
                                                                        name="last_name" placeholder="Last name"
                                                                        class="form-control"
                                                                        value="{{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <div class="profile_picture text-center">
                                                                <input type="file" name="image_path"
                                                                    accept="image/png, image/jpeg, image/jpg"
                                                                    onchange="display_image(this);"
                                                                    class="d-none upload-box-image">
                                                                <img class="box-image-preview img-fluid img-circle elevation-2"
                                                                    src="{{ isset($information['personal_info']['image_path']) && !empty($information['personal_info']['image_path']) ? asset('assets/images/' . $information['personal_info']['image_path']) : asset('assets/images/user-thumb.jpg') }}"
                                                                    alt="Profile picture"
                                                                    onclick="$(this).closest('.profile_picture').find('input').click();"
                                                                    style="height:150px; width:150px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">Profile
                                                    Title</label>
                                                <input type="text" id="profile_title" name="profile_title"
                                                    class="form-control" placeholder="Profile Title"
                                                    value="{{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}" />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label fw-bold text-secondary">About</label>
                                                <textarea class="form-control" placeholder="Descripton" id="about_me" name="about_me" rows="4">{{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Contact Information --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fw-bold text-secondary">Contact Information</h2>
                                            @foreach ($information['contact_info'] as $contact_info)
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Email</label>
                                                                    <input type="email" id="email"
                                                                        name="email" placeholder="Email"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['email']) ? $contact_info['email'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Phone
                                                                        number</label>
                                                                    <input type="number" id="phone_number"
                                                                        name="phone_number" placeholder="Phone Number"
                                                                        class="form-control"
                                                                        value="{{ isset($contact_info['phone_number']) ? $contact_info['phone_number'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Website</label>
                                                                    <input type="url" id="website"
                                                                        name="website" class="form-control"
                                                                        placeholder="Website"
                                                                        value="{{ isset($contact_info['website']) ? $contact_info['website'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">LinkedIn</label>
                                                                    <input type="url" id="linkedin_link"
                                                                        name="linkedin_link" class="form-control"
                                                                        placeholder="LinkedIn"
                                                                        value="{{ isset($contact_info['linkedin_link']) ? $contact_info['linkedin_link'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Github</label>
                                                                    <input type="url" id="github_link"
                                                                        name="github_link" class="form-control"
                                                                        placeholder="Github"
                                                                        value="{{ isset($contact_info['github_link']) ? $contact_info['github_link'] : '' }}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label
                                                                        class="form-label fw-bold text-secondary">Twitter</label>
                                                                    <input type="text" id="twitter"
                                                                        name="twitter" class="form-control"
                                                                        placeholder="Twitter"
                                                                        value="{{ isset($contact_info['twitter']) ? $contact_info['twitter'] : '' }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{-- Education --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Education</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_education">Add
                                                        Education</button>
                                                </div>
                                            </div>
                                            <section class="education_section">
                                                @foreach ($information['education_info'] as $edu_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Degree</label>
                                                                <input type="text" id="degree_title"
                                                                    name="degree_title[]" class="form-control"
                                                                    placeholder="Degree"
                                                                    value="{{ isset($edu_info['degree_title']) ? $edu_info['degree_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Institute</label>
                                                                <input type="text" id="institute"
                                                                    name="institute[]" class="form-control"
                                                                    placeholder="Institute"
                                                                    value="{{ isset($edu_info['institute']) ? $edu_info['institute'] : '' }}" />
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Start
                                                                            Date</label>
                                                                        <input type="date" id="edu_start_date"
                                                                            name="edu_start_date[]"
                                                                            class="form-control"
                                                                            value="{{ isset($edu_info['edu_start_date']) ? $edu_info['edu_start_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">End
                                                                            Date</label>
                                                                        <input type="date" id="edu_end_date"
                                                                            name="edu_end_date[]" class="form-control"
                                                                            value="{{ isset($edu_info['edu_end_date']) ? $edu_info['edu_end_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Description</label>
                                                                <textarea class="form-control" placeholder="Descripton" id="education_description" name="education_description[]"
                                                                    rows="4">{{ isset($edu_info['education_description']) ? $edu_info['education_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Experiencce --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Experience</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_experience">Add
                                                        Experience</button>
                                                </div>
                                            </div>
                                            <section class="experience_section">
                                                @foreach ($information['experience_info'] as $exp_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">Job
                                                                    Title</label>
                                                                <input type="text" id="job_title"
                                                                    name="job_title[]" class="form-control"
                                                                    placeholder="Job Title"
                                                                    value="{{ isset($exp_info['job_title']) ? $exp_info['job_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Organization</label>
                                                                <input type="text" id="organization"
                                                                    name="organization[]" class="form-control"
                                                                    placeholder="Organization"
                                                                    value="{{ isset($exp_info['organization']) ? $exp_info['organization'] : '' }}" />
                                                            </div>
                                                            <div class="row mb-4">
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Start
                                                                            Date</label>
                                                                        <input type="date" id="job_start_date"
                                                                            name="job_start_date[]"
                                                                            class="form-control"
                                                                            value="{{ isset($exp_info['job_start_date']) ? $exp_info['job_start_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-12">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">End
                                                                            Date</label>
                                                                        <input type="date" id="job_end_date"
                                                                            name="job_end_date[]" class="form-control"
                                                                            value="{{ isset($exp_info['job_end_date']) ? $exp_info['job_end_date'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label class="form-label fw-bold text-secondary">Job
                                                                    Description</label>
                                                                <textarea class="form-control" placeholder="Job Descripton" id="job_description" name="job_description[]"
                                                                    rows="4">{{ isset($exp_info['job_description']) ? $exp_info['job_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Projects --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Projects</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_project">Add
                                                        Project</button>
                                                </div>
                                            </div>
                                            <section class="project_section">
                                                @foreach ($information['project_info'] as $project_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Project
                                                                    Title</label>
                                                                <input type="text" id="project_title"
                                                                    name="project_title[]" class="form-control"
                                                                    placeholder="Project Title"
                                                                    value="{{ isset($project_info['project_title']) ? $project_info['project_title'] : '' }}" />
                                                            </div>
                                                            <div class="form-outline mb-4">
                                                                <label
                                                                    class="form-label fw-bold text-secondary">Project
                                                                    Description</label>
                                                                <textarea class="form-control" placeholder="Project Descripton" id="project_description" name="project_description[]"
                                                                    rows="4">{{ isset($project_info['project_description']) ? $project_info['project_description'] : '' }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- SKILLS & PROFICIENCY --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Skills & Proficiency</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_skill">Add
                                                        Skill</button>
                                                </div>
                                            </div>
                                            <section class="skill_section">
                                                @foreach ($information['skill_info'] as $skill_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Add
                                                                            Skill</label>
                                                                        <input type="text" id="skill_name"
                                                                            name="skill_name[]" class="form-control"
                                                                            placeholder="Add Skill"
                                                                            value="{{ isset($skill_info['skill_name']) ? $skill_info['skill_name'] : '' }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Percentage</label>
                                                                        <div class="input-group">
                                                                            <input type="number" step="5"
                                                                                min="0" max="100"
                                                                                id="skill_percentage"
                                                                                name="skill_percentage[]"
                                                                                placeholder="%" class="form-control"
                                                                                aria-describedby="percentage"
                                                                                value="{{ isset($skill_info['skill_percentage']) ? $skill_info['skill_percentage'] : '' }}" />
                                                                            <span class="input-group-text"
                                                                                id="percentage">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Languages --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Languages</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_language">Add
                                                        Language</button>
                                                </div>
                                            </div>
                                            <section class="language_section">
                                                @foreach ($information['language_info'] as $language_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="row">
                                                                <div class="col-10">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Add
                                                                            langauge</label>
                                                                        <select class="form-control" id="language"
                                                                            name="language[]">
                                                                            <option value="">Add Language
                                                                            </option>

                                                                            @foreach ($languages_list as $language)
                                                                            <option value="{{$language}}"
                                                                                {{ isset($language_info['language']) && $language_info['language'] == $language ? 'selected' : '' }}>
                                                                                {{$language}}</option>
                                                                            @endforeach


                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="form-outline">
                                                                        <label
                                                                            class="form-label fw-bold text-secondary">Level</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text"
                                                                                id="percentage">Level</span>
                                                                            <select id="language_level"
                                                                                name="language_level[]"
                                                                                placeholder="level"
                                                                                class="form-control"
                                                                                aria-describedby="percentage">
                                                                                <option value="">Select level
                                                                                </option>
                                                                                <option value="Native"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Native' ? 'selected' : '' }}>
                                                                                    Native</option>
                                                                                <option value="Fluent"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Fluent' ? 'selected' : '' }}>
                                                                                    Fluent</option>
                                                                                <option value="Basic"
                                                                                    {{ isset($language_info['language_level']) && $language_info['language_level'] == 'Basic' ? 'selected' : '' }}>
                                                                                    Basic</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>

                                    {{-- Interests --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h2 class="fw-bold text-secondary">Interests</h2>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <button class="btn btn-primary" id="add_interest">Add
                                                        interest</button>
                                                </div>
                                            </div>
                                            <section class="interest_section">
                                                @foreach ($information['interest_info'] as $interest_info)
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <span onclick="remove_section(this)"
                                                                class="position-absolute"
                                                                style="top: 10px; right: 15px; cursor: pointer;"><i
                                                                    class="fa fa-close"></i></span>
                                                            <div class="form-outline">
                                                                <label class="form-label fw-bold text-secondary">Add
                                                                    Interest</label>
                                                                <input type="text" id="interest"
                                                                    name="interest[]" class="form-control"
                                                                    placeholder="Add Interest"
                                                                    value="{{ isset($interest_info['interest']) ? $interest_info['interest'] : '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </section>
                                        </div>
                                    </div>


                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="1"
                                            id="verify" name="verify" required />
                                        <label for="verify" class="form-check-label text-dark"> Are you sure you
                                            want to save these changes?
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" id="submitbtn" class="btn btn-lg btn-success w-100">Save
                                        Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
{{ view('CV.layouts.footer') }}
