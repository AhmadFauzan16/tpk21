@extends('layouts.app')
@section('title','Hasil Penilaian')

@section('content')
    <h1>Hasil Penilaian</h1>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="myTable2">
            <thead>
                <th>ID Pegawai</th>
                <th onclick="sortTable(1)">Nama</th>
                <th onclick="sortTable(2)">Nilai Akhir</th>
            </thead>
            <tbody>
                @php

                use App\Models\pegawai;
                use App\Models\penilaian;
                use App\Models\kriteria;
                    $countpegawai = Pegawai::count();
                    $countpegawai += 1;

                    for ($i=1; $i < $countpegawai ; $i++) { 
                        $find = penilaian::where('id_pegawai',$i)->orderBy('id_pegawai')->get();
                        $nama = pegawai::where('id',$i)->value('nama');
                        
                        if ($find->isEmpty()) {
                            // echo "data gaada<hr>";
                        }
                        else{
                            //tentuin jumlah kriteria skill
                            $n2 = kriteria::count();
                            $n2 += 1;

                            $a = 0;
                            for ($ii=1; $ii < $n2 ; $ii++) { 
                                $ncf = penilaian::where('id_pegawai',$i)
                                            ->where('faktor','cf')
                                            ->where('id_k',$ii)
                                            ->sum('yepp');

                            $tncf = penilaian::where('id_pegawai',$i)
                            ->where('faktor','cf')
                            ->where('id_k',$ii)
                            ->count();
                            
                            $nsf = penilaian::where('id_pegawai',$i)
                                            ->where('faktor','sf')
                                            ->where('id_k',$ii)
                                            ->sum('yepp');

                            $tnsf = penilaian::where('id_pegawai',$i)
                            ->where('faktor','sf')
                            ->where('id_k',$ii)
                            ->count();

                            $b = penilaian::where('id_pegawai',$i)
                            ->where('id_k',$ii)
                            ->sum('bobot');

                            $bcf = penilaian::where('id_pegawai',$i)
                            ->where('faktor','cf')
                            ->where('id_k',$ii)
                            ->sum('bobotCF');

                            $bsf = penilaian::where('id_pegawai',$i)
                            ->where('faktor','sf')
                            ->where('id_k',$ii)
                            ->sum('bobotSF');

                            $x = $ncf / $tncf;//nilai total cf
                            $y = $nsf / $tnsf;//nilai total sf
                            $t = $tncf + $tnsf;//total sub kriteria
                            $bot = ($b / $t) /100;//bobot
                            $bcfx = ($bcf / $tncf) /100;//% cf
                            $bsfx = ($bsf / $tnsf) /100;//% sf

                            $z = ($bcfx * $x) + ($bsfx * $y);//
                            $z2 = $bot * $z;
                            $a +=$z2;
                            // echo 
                            // '<br>nilai total CF: '.$x.'||nilai total SF: '.$y.
                            // '<br>Bobot Kriteria = '.$bot.'||Bobot CF K = '.$bcfx.'||Bobot SF K = '.$bsfx.
                            // '<br>Nilai Total Kriteria = '.$z.'<br>bobot x Nilai Total = '.$z2.'<hr>';
                            }
                            echo '<tr><td>'.$i.'</td>';
                            echo '<td>'.$nama.'</td>';
                            echo '<td>'. number_format($a,4).'</td>';
                        }
                    }
                @endphp
                </tr>
            </tbody>
        </table>
    </div>
    
    <script>
        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById("myTable2");
          switching = true;
          // Set the sorting direction to ascending:
          dir = "asc";
          /* Make a loop that will continue until
          no switching has been done: */
          while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;
            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
              // Start by saying there should be no switching:
              shouldSwitch = false;
              /* Get the two elements you want to compare,
              one from current row and one from the next: */
              x = rows[i].getElementsByTagName("TD")[n];
              y = rows[i + 1].getElementsByTagName("TD")[n];
              /* Check if the two rows should switch place,
              based on the direction, asc or desc: */
              if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  // If so, mark as a switch and break the loop:
                  shouldSwitch = true;
                  break;
                }
              } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  // If so, mark as a switch and break the loop:
                  shouldSwitch = true;
                  break;
                }
              }
            }
            if (shouldSwitch) {
              /* If a switch has been marked, make the switch
              and mark that a switch has been done: */
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              // Each time a switch is done, increase this count by 1:
              switchcount ++;
            } else {
              /* If no switching has been done AND the direction is "asc",
              set the direction to "desc" and run the while loop again. */
              if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
              }
            }
          }
        }
        </script>
@endsection

