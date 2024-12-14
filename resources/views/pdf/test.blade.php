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
            <div>
                <div style="width: 100%; text-align: center;">
                    <strong>
                        <h1 style="margin-bottom:0rem; padding-bottom:0rem;">NOTICE OF SALARY ADJUSTMENT</h1>
                    </strong>
                    <strong style="font-size:17px">(NOSA)</strong>
                </div>
                <div style="font-size:17px; margin-top:4rem;">
                    <span>Mr./Ms.:</span>
                    <strong>{{$full_name}}</strong>
                    <br>
                    <span style="visibility: hidden">Mr./Ms.: </span><span>{{$school}}</span>
                    <br>
                    <span style="visibility: hidden">Mr./Ms.: </span><span>{{$district}}</span>
                </div>
                <p style="font-size:17px; margin-top:3rem;">Sir/Madam:</p>
                <p style="font-size:17px; text-indent:4rem; text-align: justify">
                    Pursuant to Section 26 of Republic Act 4670 otherwise known as 
                    "The Magna Carta for Public School Teachers" and the DECS-CHED-GSIS-DBM 
                    Joint Circular No. 1-97, s. 1997 dated June 5, 1997, your salary is adjusted to 
                    {{-- <span class="peso-symbol">₱</span> --}}
                    <strong><u>{{$adjusted_salary}}</u></strong>
                    per month effective 
                    <strong><u>{{$effectivity}}</u></strong>
                    computed as follows:
                </p>
                <table style="width:100%; font-size:17px; margin-top:1rem;">
                    <tr>
                        <td style="width:100%; text-indent: 4rem;">
                            <span>
                                Position: <strong style="border-bottom: 1px solid black;">{{$position}}</strong>
                            </span>
                            <span style="visibility: hidden">____</span>
                            <span>
                                SG - 
                                <strong>{{$salary_grade}}</strong>
                                Step - 
                                <strong>{{$step}}</strong>
                            </span>
                        </td>
                    </tr>
                </table>
                <table style="width:100%; font-size:17px; margin-top:1rem;">
                    <tr>
                        <td style="width:80%; text-indent: 4rem;">
                            Adjusted to:
                            <span style="visibility: hidden">__</span>
                            <span>
                                SG - 
                                <strong>{{$adjusted_sg}}</strong>
                                Step - 
                                <strong>{{$adjusted_step}}</strong>
                            </span>
                        </td>
                        <td style="width:20%;">
                            <span class="peso-symbol">₱</span>
                            <strong><u>{{$adjusted_salary}}</u></strong>
                        </td>
                    </tr>
                </table>
                <table style="width:100%; font-size:17px; margin-top:1rem;">
                    <tr>
                        <td style="width:80%; text-indent: 4rem;">
                            Adjusted Salary:
                        </td>
                        <td style="width:20%;">
                            <span class="peso-symbol">₱</span>
                            <strong><u>{{$adjusted_salary}}</u></strong>
                        </td>
                    </tr>
                </table>
                <p style="font-size:17px; text-indent: 4rem; text-align: justify">This salary adjustment is subject to review
                    and post audit by the Department of Budget and Management, and to
                    appropriate re-adjustments and refund if found not in order.</p>
            </div>
            <table style="width: 100%; font-size:17px; margin-top:5rem">
                <tr>
                    <th style="width: 25%"></th>
                    <th style="width: 25%"></th>
                    <th style="width: 15%"></th>
                    <th style="width: 35%"></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        Very truly yours,<br>
                        <div style="width: 100%; text-align: center; margin-top: 2rem">
                            <strong>VICTORIA V. GAZO</strong> <br>
                            Schools Division Superintendent
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        {{-- Footer --}}
        <div style="width: 100%; height:200px; border: 0px; margin:0px;">
            <div>
                <span style="font-size: 12px">
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





