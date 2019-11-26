<canvas id="myChart"></canvas>
              </div>

                       <?php
                foreach($grafik as $grafik){
                    $nama_lks[] = $grafik->nmlks;                    
                    $jumlah[] = $grafik->jumlah;
                }
            ?>
    <script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:<?php echo json_encode($nama_lks);?>,
        datasets:[{
          label:'kunjungan',
          data:<?php echo json_encode($jumlah);?>,
          //backgroundColor:'green',
          backgroundColor:[
           
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:1,
          hoverBorderColor:'#000'
        }]
      },
      options:{

        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>

  </form>
                </div>
            </div>
        </div>
    </div>

        </div> 


</div> 