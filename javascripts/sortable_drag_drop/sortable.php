<style>
    body.dragging, body.dragging * {
        cursor: move !important;
    }

    .dragged {
        position: absolute;
        opacity: 0.5;
        z-index: 2000;
    }

    ol.example li.placeholder {
        position: relative;
        /** More li styles **/
    }
    ol.example li.placeholder:before {
        position: absolute;
        /** Define arrowhead **/
    }
</style>

<ol class='example'>
    <li>First</li>
    <li>Second</li>
    <li>Third</li>
</ol>
<script src="sortable_master/Sortable.js"></script>

<script>
    $(function  () {
        $("ol.example").sortable();
    });
</script>