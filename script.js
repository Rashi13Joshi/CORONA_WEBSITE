$(document).ready(function(){
  var url="https://api.covid19india.org/data.json"

  $.getJSON(url,function(data){
    var total_active, total_recovered,total_deaths,total_confirmed

    var state=[]
    var confirmed=[]
    var recovered=[]
    var deaths=[]

    $.each(data.statewise,function(id,obj){
      state.push(obj.state)
      confirmed.push(obj.confirmed)
      recovered.push(obj.recovered)
      deaths.push(obj.deaths)
    })

      state.shift()    //to remove 0th element
      confirmed.shift()
      recovered.shift()
      deaths.shift()

    total_active=data.statewise[0].active
    total_recovered=data.statewise[0].recovered
    total_deaths=data.statewise[0].deaths
    total_confirmed=data.statewise[0].confirmed

    $("#active").append(total_active)
    $("#recovered").append(total_recovered)
    $("#deaths").append(total_deaths)
    $("#confirmed").append(total_confirmed)

    var mychart=document.getElementById("mychart").getContext('2d')
    var mychart2=document.getElementById("mychart2").getContext('2d')
    var mychart3=document.getElementById("mychart3").getContext('2d')

    var chart=new Chart(mychart,{
      type:'line',
      data:{
        labels:state,
        datasets:[
          {
           label:"Confirmed Cases",
           data:confirmed,
           backgroundColor:"#f1c40f",
           minBarLength:100
        }
      ]
      },
      options:{}
    })

    var chart2=new Chart(mychart2,{
      type:'line',
      data:{
        labels:state,
        datasets:[
          {
           label:"Recovered Cases",
           data:recovered,
           backgroundColor:"#2ecc71",
           minBarLength:100
        }
      ]
      },
      options:{}
    })

    var chart3=new Chart(mychart3,{
      type:'line',
      data:{
        labels:state,
        datasets:[
          {
           label:"Deceased Cases",
           data:deaths,
           backgroundColor:"#e74c3c",
           minBarLength:100
        }
      ]
      },
      options:{}
    })

  })
})
