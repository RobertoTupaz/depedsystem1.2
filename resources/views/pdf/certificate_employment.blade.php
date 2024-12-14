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
            </div>
        </div>

        {{-- Body --}}
        <div style="width: 100%; height:830px; border: 0px; margin:0px;">
            <div>
                <div class="document">
                    <div style="width: 100%; text-align: center;">
                        <strong>
                            <h1 style="margin-bottom: 0px; padding-bottom: 0px">CERTIFICATE OF EMPLOYMENT</h1>
                        </strong>
                    </div>
                    <main>
                      <p style="font-size: 19px; margin-top:4rem;">
                        <strong>TO WHOM IT MAY CONCERN:</strong>
                      </p>
                      <p style="font-size: 17px; margin-top:3rem; text-indent:4rem; text-align:justify; line-height: 2.0;">
                        This is to certify that according to records in this office, 
                        <strong>Mr./Ms 
                            <span style="border-bottom: 1px solid black;">{{$full_name}} </span>
                        </strong>
                        <span style="visibility: hidden;">
                            @php
                                for($i = 0; $i<$full_name_space; $i++) {
                                    echo('i');
                                }
                            @endphp
                        </span>
                        is presently employed as 
                        <strong style="border-bottom: 1px solid black;">{{$position}}</strong>
                        <span style="visibility: hidden;">
                            @php
                                for($i = 0; $i<$position_space; $i++) {
                                    echo('i');
                                }
                            @endphp
                        </span>
                        assigned at 
                        <span style="border-bottom: 1px solid black;">{{$school}},</span>
                        <span style="visibility: hidden;">
                            @php
                                for($i = 0; $i<$school_space; $i++) {
                                    echo('i');
                                }
                            @endphp
                        </span>
                        District of 
                        <span style="border-bottom: 1px solid black;">{{$district}}.</span>
                      </p>
                
                      <p style="font-size: 17px; text-indent:4rem; text-align:justify; line-height: 2.0;">
                        This certification is issued to 
                        <strong>Mr./Ms 
                            <span style="border-bottom: 1px solid black;">{{$full_name}}</span>
                        </strong>
                        <span style="visibility: hidden;">
                            @php
                                for($i = 0; $i<$full_name_space; $i++) {
                                    echo('i');
                                }
                            @endphp
                        </span>
                        for whatever purpose it may serve him/her best.
                      </p>
                
                      <p style="font-size: 17px; text-indent:4rem; text-align:justify; line-height: 2.0;">
                        Given this <span>{{$day}}</span> day of 
                        <span>{{$month_year}}</span> at DepEd - Bukidnon, Division Office, 
                        <span>Malaybalay City</span>.
                      </p>
                    </main>
                </div>
                <div style="width: 100%; text-align:center; margin-top:11rem; font-size: 17px;">
                    <strong><span style="font-size:19px;">JANINE S. ORONG</span></strong><br>
                    HRMO II
                </div>
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





