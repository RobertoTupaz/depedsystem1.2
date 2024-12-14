<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <style>
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('{{ asset('fonts/oet.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'Trajan';
            font-style: normal;
            font-weight: 400;
            src: url('{{ asset('fonts/trajan.ttf') }}') format('truetype');
        }

        @font-face {
            font-family: 'DejaVuSans';
            src: url('{{ asset('fonts/deja.ttf') }}') format('truetype');
        }

        .peso-symbol {
            font-family: 'DejaVuSans', sans-serif;
        }

        .old-english {
            font-family: 'Poppins', sans-serif;
        }

        .trajan {
            font-family: 'Trajan', sans-serif;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; margin-right: 40px; margin-left: 40px;">

    <div style="width: 100%; height:1300px; border: 0px; margin:0px;">
        {{-- Header --}}
        <div style="width: 100%; height:270px; border: 0px; margin:0px;">
            <div style="text-align: center;">
                <img src="{{ asset('logos/deped.png') }}" alt="Logo" style="width: 100px; height: auto;"><br>
                <span class="old-english" style="font-size: 20px">Republic of the Philippines</span><br>
                <span class="old-english" style="font-size: 30px">Department of Education</span><br>
                <span class="trajan" style="font-size: 18px">REGION X - NORTHERN MINDANAO</span><br>
                <span class="trajan" style="font-size: 18px">SCHOOLS DIVISION OF BUKIDNON</span>
                <hr style="border-color:black; border-bottom:1px">
                <p style="text-align:right; font-size:17px;">{{$date}}</p>
            </div>
        </div>

        {{-- Body --}}
        <div style="width: 100%; height:830px; border: 0px; margin:0px;">
            <div style="font-size: 17px">
                <div style="width: 100%; text-align: center;">
                    <strong><h2>CERTIFICATE OF EMPLOYMENT AND COMPENSATION</h2></strong>
                </div>
                <p>TO WHOM IT MAY CONCERN:</p>
                <p style="text-indent: 4rem; text-align:justify; line-height: 1.5;">
                    This is to certify that according to records in this office, 
                    <strong>Mr./Ms. <u>{{$full_name}}</u></strong>
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$full_name_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    is presently employed as <u><strong>{{$position}}</strong></u> 
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$position_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    assigned at <u><span>{{$school}}</span></u>
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$school_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    under the district of <u><span>{{$district}}</span>.</u>
                </p>
                <p style="text-indent: 4rem;">
                    This is to further certify that he/she is receiving the following compensation:
                </p>
                <p style="text-indent: 5rem;">
                    Basic Annual Compensation as of {{$date}}:
                </p>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 50%"></th>
                        <th style="width: 50%"></th>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">Basic Annual Salary</td>
                        <td style="text-align: right; padding-right:13rem;">{{$annual_salary}}</td>
                    </tr>
                    <!-- <tr>
                        <td style="text-indent: 10rem">ACA/ PERA</td>
                        <td style="text-align: right; padding-right:13rem;">{{$aca_pera}}</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">Bonus</td>
                        <td style="text-align: right; padding-right:13rem;">{{$bonus}}</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">Chalk Allowance</td>
                        <td style="text-align: right; padding-right:13rem;">{{$chalk_allowance}}</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">Clothing Allowance</td>
                        <td style="text-align: right; padding-right:13rem;">{{$clothing_allowance}}</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">PEI</td>
                        <td style="text-align: right; padding-right:13rem;">{{$pei}}</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 10rem">Hazard Pay</td>
                        <td style="text-align: right; padding-right:13rem;">{{$hazard_pay}}</td>
                    </tr> -->
                    <tr style="visibility: hidden;">
                        <td style="text-indent: 10rem">Hazard Pay</td>
                        <td style="text-align: right; padding-right:13rem;">i</td>
                    </tr>
                    <tr>
                        <td style="text-indent: 12rem"><strong>Total</strong></td>
                        <td style="text-align: right; padding-right:13rem;"><span class="peso-symbol">₱</span> <strong>{{$total}}</strong></td>
                    </tr>
                </table>
                <p style="text-indent: 4rem; margin-top:2rem; text-align:justify; line-height: 1.5;">This certification is issued to 
                    <strong><span>Mr./Ms. <u>{{$full_name}}</u></span></strong>
                    <span style="visibility: hidden;">
                        @php
                            for($i = 0; $i<$full_name_space; $i++) {
                                echo('i');
                            }
                        @endphp
                    </span>
                    for whatever purpose it may serve him/her best.
                </p>
                <p style="text-indent: 4rem; text-align:justify;">
                    Given this <span>{{$day}}</span> day of <span>September 2024</span> 
                    at DepEd - Bukidnon, Division Office, Malaybalay City.
                </p>
                <p style="margin-top: 6rem; text-align: center;">
                    <strong><span style="font-size:19px;">JANINE S. ORONG</span></strong><br>
                    HRMO II
                </p>
            </div>
        </div>

        {{-- Footer --}}
        <div style="width: 100%; height:200px; border: 0px; margin:0px;">
            <div>
                <span style="font-size: 12px; visibility:hidden;">
                    Copy Furnished: <br>
                    Records Section <br>
                    GSIS File
                </span>
                <hr style="border-color:black; border-bottom:1px">
                <table>
                    <tr>
                        <th style="width: 12%"></th>
                        <th style="width: 12%"></th>
                        <th style="width: 12%"></th>
                        <th style="width: 64%"></th>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('logos/depedBukidnon.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <img src="{{ asset('logos/matatag.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <img src="{{ asset('logos/bagongpilipinas.png') }}" alt="Logo"
                                style="width: 100px; height: auto;">
                        </td>
                        <td style="font-size: 12px; line-height: 2.0;">
                            <span>Address: Fortich St., Sumpong, Malaybalay City, Bukidnon</span><br>
                            <span>Telephone no: +639178423657</span><br>
                            <span>Website: <a href="https://bukidnon.deped.gov.ph">https://bukidnon.deped.gov.ph</a></span><br>
                            <span>Email Address: <a href="mailto:bukidnon@deped.gov.ph">bukidnon@deped.gov.ph</a></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>