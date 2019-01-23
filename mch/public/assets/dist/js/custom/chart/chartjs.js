$(function () {
    "use strict";
	// Bar chart
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
		  labels: ["Pharmacy", "Laboratory", "Employees", "Stores", "Transport"],
		  datasets: [
			{
			  label: "Cost (KES)",
			  backgroundColor: ["#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			  data: [8478000,6267000,5734000,4784000,1833000]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Summary of Expenses'
		  }
		}
	});

	// New chart
	new Chart(document.getElementById("pie-chart"), {
		type: 'pie',
		data: {
		  labels: ["Pharmacy", "Insurance", "Patients Admission", "Others"],
		  datasets: [{
			label: "Sales",
			backgroundColor: ["#36a2eb", "#ff6384","#4bc0c0","#ffcd56","#07b107"],
			data: [2478000,5267000,3734000,2784000]
		  }]
		},
		options: {
		  title: {
			display: true,
			text: 'Sales'
		  }
		}
	});

    // Horizontal Profit and Loss
    new Chart(document.getElementById("bar-chart-horizontal-profit-and-loss"), {
        type: 'horizontalBar',
        data: {
            labels: ["Income","Expenses"],
            datasets: [
                {
                    label: "KES",
                    backgroundColor: ["#03a9f4", "#e861ff"],
                    data: [8478000,7167000]
                }
            ]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Profit and Loss'
            }
        }
    });

	// Horizental Bar Chart
	new Chart(document.getElementById("bar-chart-horizontal-income"), {
		type: 'horizontalBar',
		data: {
		  labels: ["InPatient Admission", "Outpatient Admission", "Consultation", "Insurance", "Cafeteria"],
		  datasets: [
			{
			  label: "Hospital Income Revenue",
			  backgroundColor: ["#03a9f4", "#e861ff","#08ccce","#e2b35b","#e40503"],
			  data: [8478000,6267000,5534000,4784000,3433000]
			}
		  ]
		},
		options: {
		  legend: { display: false },
		  title: {
			display: true,
			text: 'Hospital Income'
		  }
		}
	});

}); 