<!-- Add Modal -->
<div id="addConfirmationModal" class="modal">
    <div class="modal-content">
        <h4>Add Data</h4>
        <p>Do you want to take this action?</p>
        <hr>
        <div class="confirmButton">
            <button id="confirmCancelAdd" class="confirm-cancel" onclick="closeModalAdd()">Cancel</button>
            <button id="confirmAdd" class="confirm-acc" onclick="addData()">Add</button>
        </div>
    </div>
</div>

<!-- Update Modal -->
<div id="updateConfirmationModal" class="modal">
    <div class="modal-content">
        <h4>Update Data</h4>
        <p>Do you want to take this action?</p>
        <hr>
        <div class="confirmButton">
            <button id="confirmCancelUpdate" class="confirm-cancel" onclick="closeModalUpdate()">Cancel</button>
            <button id="confirmUpdate" class="confirm-acc" onclick="updateData()">Update</button>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteConfirmationModal" class="modal">
    <div class="modal-content">
        <h4>Delete Data</h4>
        <p>Do you want to take this action?</p>
        <hr>
        <div class="confirmButton">
            <button id="confirmCancelDelete" class="confirm-cancel" onclick="closeModalDelete()">Cancel</button>
            <button id="confirmDelete" class="confirm-acc" onclick="deleteData()">Delete</button>
        </div>
    </div>
</div>