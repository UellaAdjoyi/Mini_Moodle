<script>
    function loadUeList(search = '') {
        fetch(`php/get_ue_list.php?search=${search}`)
            .then(response => response.json())
            .then(data => {
                let list = document.getElementById('ue-list');
                list.innerHTML = '';
                data.forEach(ue => {
                    let item = document.createElement('li');
                    item.classList.add('list-group-item');
                    item.innerHTML = `${ue.intitule} <button class="btn btn-primary btn-sm" onclick="assignUe(${ue.id})">Ajouter</button>`;
                    list.appendChild(item);
                });
            });
    }

    function loadAssignedUe() {
        fetch('php/get_assigned_ue.php')
            .then(response => response.json())
            .then(data => {
                let list = document.getElementById('assigned-ue-list');
                list.innerHTML = '';
                data.forEach(ue => {
                    let item = document.createElement('li');
                    item.classList.add('list-group-item');
                    item.innerHTML = `${ue.intitule} <button class="btn btn-danger btn-sm" onclick="removeUe(${ue.id})">Retirer</button>`;
                    list.appendChild(item);
                });
            });
    }

    function assignUe(ueId) {
        fetch('php/assign_ue.php', {
            method: 'POST',
            body: new URLSearchParams({
                ue_id: ueId
            })
        }).then(() => loadAssignedUe());
    }

    function removeUe(ueId) {
        fetch('php/remove_ue.php', {
            method: 'POST',
            body: new URLSearchParams({
                ue_id: ueId
            })
        }).then(() => loadAssignedUe());
    }

    function addUe() {
        let code = document.getElementById('ue-code').value;
        let title = document.getElementById('ue-title').value;

        fetch('php/add_ue.php', {
            method: 'POST',
            body: new URLSearchParams({
                code: code,
                intitule: title
            })
        }).then(() => {
            loadUeList();
            document.getElementById('add-ue-form').reset();
        });
    }
</script>