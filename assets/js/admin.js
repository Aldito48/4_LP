const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})

if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}

window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})

// --------------------------- Theme ------------------------------
const switchMode = document.getElementById('switch-mode');

if (localStorage.getItem('dark-mode') === 'enabled') {
    document.body.classList.add('dark');
    switchMode.checked = true;
} else {
    document.body.classList.remove('dark');
    switchMode.checked = false;
}

switchMode.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
        localStorage.setItem('dark-mode', 'enabled');
    } else {
        document.body.classList.remove('dark');
        localStorage.setItem('dark-mode', 'disabled');
    }
});
// --------------------------- Theme ------------------------------

// --------------------------- Search ------------------------------
document.getElementById('search-input').addEventListener('input', function() {
    const searchTerm = this.value.trim();
    if (searchTerm.length > 0) {
        fetchResults(searchTerm);
    } else {
        document.getElementById('search-results').innerHTML = '';
    }
});

function fetchResults(query) {
    fetch(`search.php?query=${query}`)
        .then(response => response.json())
        .then(data => {
            displayResults(data);
        })
        .catch(error => console.error('Error fetching data:', error));
}

function displayResults(results) {
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';

    results.forEach(item => {
        const li = document.createElement('li');
        const anchor = document.createElement('a');
        anchor.href = item.name + '.php';
        const icon = document.createElement('i');
        icon.className = item.icon;
        const title = document.createTextNode(item.title);
        anchor.appendChild(icon);
        anchor.appendChild(title);
        li.appendChild(anchor);
        resultsContainer.appendChild(li);
    });
}
// --------------------------- Search ------------------------------

// --------------------------- Modal ------------------------------
function showAddConfirmationModal(id) {
    document.getElementById('addConfirmationModal').style.display = 'block';
}

function closeModalAdd() {
    document.getElementById('addConfirmationModal').style.display = 'none';
}

function addData() {
    window.location.href = '';
}

function showUpdateConfirmationModal(id) {
    document.getElementById('updateConfirmationModal').style.display = 'block';
}

function closeModalUpdate() {
    document.getElementById('updateConfirmationModal').style.display = 'none';
}

function updateData() {
    window.location.href = '';
}

let deleteUrl = '';

function showDeleteConfirmationModal(id) {
    deleteUrl = '../../admin/proccess/delete.php?id=' + id;
    document.getElementById('deleteConfirmationModal').style.display = 'block';
}

function closeModalDelete() {
    document.getElementById('deleteConfirmationModal').style.display = 'none';
}

function deleteData() {
    window.location.href = deleteUrl;
}
// --------------------------- Modal ------------------------------

// --------------------------- FormData ------------------------------
function showForm(type, id = null) {
    document.querySelector('.order').style.display = 'none';
    document.querySelector('#formData').style.display = 'block';
    const title = document.querySelector('.title-form');
    const submit = document.querySelector('.submit');

    const form = document.querySelector('#dataForm');
    if (type === 'add' && id === null) {
        form.action = 'proccess/add.php';
        title.textContent = 'Add';
        submit.value = 'Add';
        submit.name = 'add';
    } else if (type === 'update' && id !== null) {
        form.action = 'proccess/update.php?id=' + id;
        title.textContent = 'Update';
        submit.value = 'Update';
        submit.name = 'update';
    }
}

function hideForm() {
    document.querySelector('#formData').style.display = 'none';
    document.querySelector('.order').style.display = 'block';
}
// --------------------------- FormData ------------------------------

// --------------------------- Date ------------------------------
const dateInputs = document.querySelectorAll('input[type="date"]');

dateInputs.forEach(function(input) {
    input.addEventListener('keydown', function(event) {
        event.preventDefault();
    });

    input.addEventListener('click', function() {
        this.showPicker();
    });
});
// --------------------------- Date ------------------------------