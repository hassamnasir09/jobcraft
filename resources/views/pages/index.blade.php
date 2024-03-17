<x-app-layout>

    <div class="hero-wrap js-fullheight" style="background-image: url('/plugins/jobportal/images/bg_2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center text-md-left mb-5"
                    data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Apply Now</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Now
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">



                <h2 class="page-header">Job Details</h2>

            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form class="form-horizontal span6  wow fadeInDown"
                        action="process.php?action=submitapplication&JOBID=2" enctype="multipart/form-data"
                        method="POST" autocomplete="off">



                        <style type="text/css">
                            .form-control-2 {
                                display: inline-block;
                                width: 25%;
                                padding: 0.375rem 0.75rem;
                                font-size: 1rem;
                                line-height: 1.5;
                                color: #495057;
                                background-color: #fff;
                                background-clip: padding-box;
                                border: 1px solid #ced4da;
                                border-radius: 0.25rem;
                                -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                                -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                            }
                        </style>


                        <form action="#" class="bg-white p-5 contact-form">
                            <div class="form-group">
                                <input name="JOBID" type="hidden" value="2">
                                <input class="form-control " id="FNAME" name="FNAME" placeholder="Firstname" type="text"
                                    value="" onkeyup="javascript:capitalize(this.id, this.value);">
                            </div>
                            <div class="form-group">
                                <input class="form-control " id="LNAME" name="LNAME" placeholder="Lastname"
                                    onkeyup="javascript:capitalize(this.id, this.value);">
                            </div>
                            <div class="form-group">
                                <input class="form-control " id="MNAME" name="MNAME" placeholder="Middle Name"
                                    onkeyup="javascript:capitalize(this.id, this.value);">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control " id="ADDRESS" name="ADDRESS" placeholder="Address"
                                    type="text" value="" required
                                    onkeyup="javascript:capitalize(this.id, this.value);"></textarea>
                            </div>

                            <div class="form-group">
                                Sex:
                                <input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio"
                                    value="Female">Female
                                <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Male
                            </div>


                            <div class="form-group"> Date of Birth
                                <select class="form-control-2" name="month">
                                    <option>Month</option>
                                    <option value=1>Jan</option>
                                    <option value=2>Feb</option>
                                    <option value=3>Mar</option>
                                    <option value=4>Apr</option>
                                    <option value=5>May</option>
                                    <option value=6>Jun</option>
                                    <option value=7>Jul</option>
                                    <option value=8>Aug</option>
                                    <option value=9>Sep</option>
                                    <option value=10>Oct</option>
                                    <option value=11>Nov</option>
                                    <option value=11>Dec</option>
                                </select>
                                <select class="form-control-2" name="day">
                                    <option>Day</option>
                                    <option value=31>31</option>
                                    <option value=30>30</option>
                                    <option value=29>29</option>
                                    <option value=28>28</option>
                                    <option value=27>27</option>
                                    <option value=26>26</option>
                                    <option value=25>25</option>
                                    <option value=24>24</option>
                                    <option value=23>23</option>
                                    <option value=22>22</option>
                                    <option value=21>21</option>
                                    <option value=20>20</option>
                                    <option value=19>19</option>
                                    <option value=18>18</option>
                                    <option value=17>17</option>
                                    <option value=16>16</option>
                                    <option value=15>15</option>
                                    <option value=14>14</option>
                                    <option value=13>13</option>
                                    <option value=12>12</option>
                                    <option value=11>11</option>
                                    <option value=10>10</option>
                                    <option value=9>9</option>
                                    <option value=8>8</option>
                                    <option value=7>7</option>
                                    <option value=6>6</option>
                                    <option value=5>5</option>
                                    <option value=4>4</option>
                                    <option value=3>3</option>
                                    <option value=2>2</option>
                                    <option value=1>1</option>
                                </select>
                                <select class="form-control-2" name="year">
                                    <option>Year</option>
                                    <option value=2010>2010</option>
                                    <option value=2009>2009</option>
                                    <option value=2008>2008</option>
                                    <option value=2007>2007</option>
                                    <option value=2006>2006</option>
                                    <option value=2005>2005</option>
                                    <option value=2004>2004</option>
                                    <option value=2003>2003</option>
                                    <option value=2002>2002</option>
                                    <option value=2001>2001</option>
                                    <option value=2000>2000</option>
                                    <option value=1999>1999</option>
                                    <option value=1998>1998</option>
                                    <option value=1997>1997</option>
                                    <option value=1996>1996</option>
                                    <option value=1995>1995</option>
                                    <option value=1994>1994</option>
                                    <option value=1993>1993</option>
                                    <option value=1992>1992</option>
                                    <option value=1991>1991</option>
                                    <option value=1990>1990</option>
                                    <option value=1989>1989</option>
                                    <option value=1988>1988</option>
                                    <option value=1987>1987</option>
                                    <option value=1986>1986</option>
                                    <option value=1985>1985</option>
                                    <option value=1984>1984</option>
                                    <option value=1983>1983</option>
                                    <option value=1982>1982</option>
                                    <option value=1981>1981</option>
                                    <option value=1980>1980</option>
                                    <option value=1979>1979</option>
                                    <option value=1978>1978</option>
                                    <option value=1977>1977</option>
                                    <option value=1976>1976</option>
                                    <option value=1975>1975</option>
                                    <option value=1974>1974</option>
                                    <option value=1973>1973</option>
                                    <option value=1972>1972</option>
                                    <option value=1971>1971</option>
                                    <option value=1970>1970</option>
                                    <option value=1969>1969</option>
                                    <option value=1968>1968</option>
                                    <option value=1967>1967</option>
                                    <option value=1966>1966</option>
                                    <option value=1965>1965</option>
                                    <option value=1964>1964</option>
                                    <option value=1963>1963</option>
                                    <option value=1962>1962</option>
                                    <option value=1961>1961</option>
                                    <option value=1960>1960</option>
                                    <option value=1959>1959</option>
                                    <option value=1958>1958</option>
                                    <option value=1957>1957</option>
                                    <option value=1956>1956</option>
                                    <option value=1955>1955</option>
                                    <option value=1954>1954</option>
                                    <option value=1953>1953</option>
                                    <option value=1952>1952</option>
                                    <option value=1951>1951</option>
                                    <option value=1950>1950</option>
                                    <option value=1949>1949</option>
                                    <option value=1948>1948</option>
                                    <option value=1947>1947</option>
                                    <option value=1946>1946</option>
                                    <option value=1945>1945</option>
                                    <option value=1944>1944</option>
                                    <option value=1943>1943</option>
                                    <option value=1942>1942</option>
                                    <option value=1941>1941</option>
                                    <option value=1940>1940</option>
                                    <option value=1939>1939</option>
                                    <option value=1938>1938</option>
                                    <option value=1937>1937</option>
                                    <option value=1936>1936</option>
                                    <option value=1935>1935</option>
                                    <option value=1934>1934</option>
                                    <option value=1933>1933</option>
                                    <option value=1932>1932</option>
                                    <option value=1931>1931</option>
                                    <option value=1930>1930</option>
                                    <option value=1929>1929</option>
                                    <option value=1928>1928</option>
                                    <option value=1927>1927</option>
                                    <option value=1926>1926</option>
                                    <option value=1925>1925</option>
                                    <option value=1924>1924</option>
                                    <option value=1923>1923</option>
                                    <option value=1922>1922</option>
                                    <option value=1921>1921</option>
                                    <option value=1920>1920</option>
                                    <option value=1919>1919</option>
                                    <option value=1918>1918</option>
                                    <option value=1917>1917</option>
                                    <option value=1916>1916</option>
                                    <option value=1915>1915</option>
                                    <option value=1914>1914</option>
                                    <option value=1913>1913</option>
                                    <option value=1912>1912</option>
                                    <option value=1911>1911</option>
                                    <option value=1910>1910</option>
                                    <option value=1909>1909</option>
                                    <option value=1908>1908</option>
                                    <option value=1907>1907</option>
                                    <option value=1906>1906</option>
                                    <option value=1905>1905</option>
                                    <option value=1904>1904</option>
                                    <option value=1903>1903</option>
                                    <option value=1902>1902</option>
                                    <option value=1901>1901</option>
                                    <option value=1900>1900</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control " id="BIRTHPLACE" name="BIRTHPLACE"
                                    placeholder="Place of Birth" type="text" value="" required
                                    onkeyup="javascript:capitalize(this.id, this.value);"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control " id="TELNO" name="TELNO" placeholder="Contact No."
                                    type="text" any value="" required
                                    onkeyup="javascript:capitalize(this.id, this.value);">
                            </div>
                            <div class="form-group">
                                <select class="form-control " name="CIVILSTATUS" id="CIVILSTATUS">
                                    <option value="none">Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widow">Widow</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <input type="Email" class="form-control " id="EMAILADDRESS" name="EMAILADDRESS"
                                    placeholder="Email Address" autocomplete="false" />
                            </div>
                            <div class="form-group">
                                <input class="form-control " id="USERNAME" name="USERNAME" placeholder="Username"
                                    onkeyup="javascript:capitalize(this.id, this.value);">

                            </div>
                            <div class="form-group">
                                <input class="form-control " id="PASS" name="PASS" placeholder="Password"
                                    type="password" onkeyup="javascript:capitalize(this.id, this.value);">

                            </div>
                            <div class="form-group">
                                <input class="form-control " id="DEGREE" name="DEGREE"
                                    placeholder="Educational Attainment"
                                    onkeyup="javascript:capitalize(this.id, this.value);">

                            </div>


                            <div class="form-group">
                                Attach your Resume here.
                                <input id="picture" name="picture" type="file">
                                <input name="MAX_FILE_SIZE" type="hidden" value="1000000">
                            </div>


                            <div class="form-group">
                                <input type="checkbox"> By Sign up you are agree with our <a href="#">terms and
                                    condition</a>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Submit Application" name="submit"
                                    class="btn btn-primary py-3 px-5">
                            </div>
                        </form>



                    </form>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="panel">
                        <div class="panel-header">
                            <div
                                style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">
                                <a href="/index.php?q=viewjob&search=2">Accounting</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row contentbody">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fp-ht-bed"></i>Required No. of Employee's : 1</li>
                                        <li><i class="fp-ht-food"></i>Salary : 15,000.00</li>
                                        <li><i class="fa fa-sun-"></i>Duration of Employment : may 20</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fp-ht-tv"></i>Prefered Sex : Female</li>
                                        <li><i class="fp-ht-computer"></i>Sector of Vacancy : yes</li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <p>Qualification/Work Experience :</p>
                                    <ul style="list-style: none;">
                                        <li>Two years Experience</li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <p>Job Description:</p>
                                    <ul style="list-style: none;">
                                        <li>We are looking for bachelor of science in Acountancy</li>
                                    </ul>
                                </div>
                                <div class="col-md-12">
                                    <p>Employer : URC</p>
                                    <p>Location : Bry Camugao</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            Date Posted : May 20, 2018 </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                      
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>