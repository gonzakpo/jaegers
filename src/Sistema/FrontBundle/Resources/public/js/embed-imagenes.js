// Get the ul that holds the collection
var $collectionPublicidad;
// setup an "add a tag" link
var $addTagLink = $('<a href="#" class="add_imagenes_link btn btn-info"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-picture"></i></a>');
var $newLinkLi = $('<div></div>');

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionPublicidad = $('.imagenes-publicidad');
    // add the "add a tag" anchor and li to the tags ul
    $collectionPublicidad.append($newLinkLi);
    $collectionPublicidad.append($addTagLink);
    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionPublicidad.data('index', $collectionPublicidad.find(':input').length);

    $addTagLink.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addForm($collectionPublicidad, $newLinkLi);
    });
    $collectionPublicidad.delegate('.delete_imagenes','click', function(e) {
        // prevent the link from creating a "#" on  the URL
        e.preventDefault();
        // remove the li for the tag form
        jQuery(this).closest('.rowremove').remove();
    }); 
});