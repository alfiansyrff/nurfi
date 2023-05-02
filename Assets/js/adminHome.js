// jshint esversion: 6
var xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli',' Agus', 'Sept', 'Okt', 'Nov', 'Des'];
var yValues = [7, 8, 8, 9, 9, 15, 20, 10, 20, 30, 9, 15];


const line_chart = new Chart("lineChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      label: "Jumlah Pengunjung",
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(44, 75, 187, 0.8)",
      borderColor: "#7f5af0",
      data: yValues,
      pointRadius:0,
    }]
  },
  options: {
    legend: {
      display: true,
      labels: {
        fontColor: "#fff",
        fontSize:14,
      }, 
    },
    scales: {
      yAxes: [{
        ticks: {
          min: 0, 
          stepSize:5,
          fontColor: "#fff",
        }
      }],
      xAxes: [{
        ticks: {
          fontColor: "#fff",
        }
      }],
    },
    
  }
});


var xValues = ["S1", "S2", "S3"];
var yValues = [15, 30, 20];
var barColors = [
  "#FF6961",
  "#77DD77",
  "#6CA0DC",
];

const pie_chart = new Chart("pieChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Jumlah Beasiswa Berdasarkan Jenjang",
      fontColor: '#fff',
      fontSize: 14,
    },
    legend: {
      labels: {
        fontColor: '#fff'
      }
    }
  },
});

const imageBtn  = document.querySelector("#profil");
const profilModal = document.querySelector(".profil__modal");
const logoutBtn = document.querySelector("#logout");

imageBtn.addEventListener("click", () => {
  profilModal.style.display = profilModal.style.display === "block" ? "none" : "block";
});

logoutBtn.addEventListener("click", () => {
  window.location.href = "../login.html";
});
  
const toggle = document.querySelector('.toggle-icon');
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content');
  
toggle.addEventListener('click', () => {
  sidebar.classList.toggle('hidden');
  content.classList.toggle('full');
});