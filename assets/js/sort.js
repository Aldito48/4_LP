$(function() {
    $("#sortable-list").sortable({
        update: function(event, ui) {
            let sortedIDs = $("#sortable-list").sortable("toArray", {attribute: "data-id"});
            let newSorts = {};
            $("#sortable-list li").each(function(index) {
                let id = $(this).data("id");
                newSorts[id] = index + 1;
            });
            $.ajax({
                url: 'proccess/sort',
                method: 'POST',
                data: {newSorts: newSorts},
                success: function(response) {
                    console.log('Sort order updated');
                }
            });
        }
    });
});