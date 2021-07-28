<style>
    page {
        font-family: times;
    }

    .header {
        text-align: center;
        margin-bottom: 10px;
    }

    .nama {
        margin: 0;
        padding: 0;
        font-size: 24pt;
    }

    .dom_wa {
        margin: 7px 0px 0px 0px;
        padding: 0;
        font-size: 12pt;
    }

    .email_linkedin {
        margin: 2px 0px 0px 0px;
        padding: 0;
        font-size: 12pt;
    }

    .batas {
        border-bottom: 0.5px solid black;
        padding: 0px;
        margin: 10px 0px 10px 0px;
    }

    h3 {
        color: #5f9ea0;
        padding: 0px;
        margin: 0px 0px 10px 0px;
    }

    .contain {
        margin: 0px 20px 3px 20px;
    }

    .heading {
        font-weight: bold;
        font-size: 12pt;
        margin-bottom: 2px;
    }

    .sub {
        margin: 3px 0px 3px 0px;
        text-align: justify;
        font-size: 11pt;
    }

    .italic {
        font-style: italic;
    }

    .item {
        font-size: 12pt;
        width: 100%;
    }

</style>

@php
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
@endphp

<page footer="page">
    <div class="header">
        <h1 class="nama">{{ucwords($data_biodata[0]->fullname)}}</h1>
        <p class="dom_wa">{{ucwords($data_biodata[0]->city)}}, {{ucwords($data_biodata[0]->country)}} | {{$data_biodata[0]->phone}}</p>
        <p class="email_linkedin">{{$data_biodata[0]->email}} | {{$data_biodata[0]->linkedIn}}</p>
    </div>

    <div class="contain">
        <div class="batas"></div>
    </div>

    <div class="contain">
        <h3>Pendidikan</h3>
    </div>
    @foreach($data_education as $key=>$value)
        <div class="contain">
            <div class="heading">{{ucwords($value->university)}} ({{ucwords($value->degree)}})</div>
            <div class="sub">
                @php
                    $start = explode("-", $value->start_date);
                    $end = explode("-", $value->end_date);
                    $start_date = $bulan[(int) $start[1]].' '.$start[0];
                    if ($value->end_date > now()){
                        $end_date = "Present";
                    } else{
                        $end_date = $bulan[(int) $end[1]].' '.$end[0];
                    }
                    echo $start_date.' s/d '.$end_date;
                @endphp
            </div>
            <div class="sub">{{$value->major}}</div>
            <div class="sub">IPK : {{$value->gpa}}/4.00</div>
        </div>
    @endforeach

    <div class="contain">
        <div class="batas"></div>
    </div>

    <div class="contain">
        <h3>Seminar & Training</h3>
    </div>
    @foreach($data_seminar as $key=>$value)
        <div class="contain">
            <div class="heading">{{ucwords($value->event_name)}}</div>
            <div class="sub">
                @php
                    $start = explode("-", $value->start_date);
                    $end = explode("-", $value->end_date);
                    $start_date = $start[2].' '.$bulan[(int) $start[1]].' '.$start[0];
                    if ($value->end_date > now()){
                        $end_date = "Present";
                    } else{
                        $end_date = $end[2].' '.$bulan[(int) $end[1]].' '.$end[0];
                    }

                    #Code below is checking if the seminar event was held in one date only

                    if ($value->start_date != $value->end_date){
                        echo $start_date.' s/d '.$end_date;
                    } else{
                        echo $end_date;
                    }
                @endphp
            </div>
            <div class="sub">{{ucwords($value->organizer)}}</div>
        </div>
    @endforeach

    <div class="contain">
        <div class="batas"></div>
    </div>

    <div class="contain">
        <h3>Proyek</h3>
    </div>
    @foreach($data_project as $key=>$value)
        <div class="contain">
            <div class="heading">{{ucwords($value->project_name)}} - {{ucwords($value->role)}}</div>
            <div class="sub">
                @php
                    $start = explode("-", $value->start_date);
                    $end = explode("-", $value->end_date);
                    $start_date = $bulan[(int) $start[1]].' '.$start[0];
                    if ($value->end_date > now()){
                        $end_date = "Present";
                    } else{
                        $end_date = $bulan[(int) $end[1]].' '.$end[0];
                    }
                    echo $start_date.' s/d '.$end_date;
                @endphp
            </div>
            <div class="sub">{{ucfirst($value->description)}}</div>
        </div>
    @endforeach

    <div class="contain">
        <div class="batas"></div>
    </div>

    <div class="contain">
        <h3>Pengalaman Organisasi</h3>
    </div>
    @foreach($data_organization as $key=>$value)
        <div class="contain">
            <div class="heading">{{ucwords($value->organization_name)}}</div>
            <div class="sub">
                @php
                    $start = explode("-", $value->start_date);
                    $end = explode("-", $value->end_date);
                    $start_date = $bulan[(int) $start[1]].' '.$start[0];
                    if ($value->end_date > now()){
                        $end_date = "Present";
                    } else{
                        $end_date = $bulan[(int) $end[1]].' '.$end[0];
                    }
                    echo $start_date.' s/d '.$end_date;
                @endphp
            </div>
            <div class="sub">{{ucwords($value->role)}}</div>
        </div>
    @endforeach

    <div class="contain">
        <div class="batas"></div>
    </div>

    <div class="contain">
        <h3>Skill</h3>
    </div>
    <div class="contain">
        <div class="item">- Javascript</div>
        <div class="item">- HTML</div>
        <div class="item">- CSS</div>
        <div class="item">- Python3</div>
        <div class="item">- Golang</div>
        <div class="item">- Codeigniter</div>
        <div class="item">- Laravel</div>
        <div class="item">- Oracle SQL Developer</div>
    </div>
</page>
