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
                <span style="letter-spacing: 6px; font-size:1.5rem; font-weight:bold;">SPECIAL ORDER</span>
                <br>
                <span style="font-size: 17px">
                    No. 
                    <strong style="border-bottom: 2px solid black;">
                        <span style="visibility: hidden">___</span>{{$order_number}}<span style="visibility: hidden">___</span>
                    </strong> 
                    s. <strong>{{date('Y')}}</strong>
                </span>
            </div>
        
            <div style="font-size: 17px; margin-top:2rem">
                <p>
                    <strong>{{$full_name}}</strong><br>
                    {{$position}}<br>
                    {{$school}}<br>
                    {{$district}}
                </p>
                
                <p style="margin-top: 2rem; text-indent:4rem; text-align:justify; line-height: 2.0;">
                    By the authority of the secretary of the Department of Education, you are hereby separated from the
                    National Municipal Rolls as 
                    <span style="visibility: hidden;">i</span>
                    <span style="border-bottom: 2px solid black;">
                        <strong>
                            {{$position}}
                        </strong>
                    </span>
                    <span style="visibility: hidden;">iiiiiii</span>
                    with annual compensation at the rate of 
                    <strong style="border-bottom: 2px solid black;">{{$spellOutCompensation}} pesos ({{$compensation}})</strong>
                    effective
                    <strong style="border-bottom: 2px solid black; letter-spacing: 5px;">{{$effectivity}}.</strong>
                </p>
        
                <p style="margin-top:2rem; ">
                    <strong>REASON:</strong> <strong style="border-bottom: 2px solid black;">{{$reason}}</strong>
                </p>
            </div>
        
            <table style="width: 100%; font-size: 17px; margin-top:5rem">
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
                        <div style="width: 100%; text-align: center;">
                        <strong><span style="font-size:19px;">VICTORIA V. GAZO</span></strong><br>
                            Schools Division Superintendent
                        </div>
                    </td>
                </tr>
            </table>

            <div style="margin-top: 12rem;">
                <strong style="font-size: 17px; border-bottom: 2px solid black;">{{$code}}</strong><br>
                <span style="font-size: 13px;"><strong>Major</strong></span><br>
                <span style="font-size: 12px;">
                    Copy Furnished: <br>
                    Teachers File <br>
                    Division HR Service File <br>
                    GSIS File
                </span>
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