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

// --------------------------- FormField ------------------------------
const form = document.getElementById("dataForm"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allRequired = form.querySelectorAll(".first [required]");

nextBtn.addEventListener("click", () => {
    let allFilled = true;
    allRequired.forEach(field => {
        if (!field.validity.valid) {
            allFilled = false;
        }
    });

    if (allFilled) {
        form.classList.add('secActive');
    } else {
        form.reportValidity();
        form.classList.remove('secActive');
    }
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
// --------------------------- FormField ------------------------------

// --------------------------- FormReSize ------------------------------
document.addEventListener("DOMContentLoaded", function () {
    const formLayout = document.querySelector('.form-layout');
    function adjustFormLayoutHeight() {
        const scrollHeight = formLayout.scrollHeight;
        formLayout.style.height = scrollHeight + 'px';
    }
    adjustFormLayoutHeight();
    const observer = new MutationObserver(adjustFormLayoutHeight);
    observer.observe(formLayout, {
        childList: true,
        subtree: true,
        attributes: true
    });
    window.addEventListener('resize', adjustFormLayoutHeight);
});
// --------------------------- FormReSize ------------------------------