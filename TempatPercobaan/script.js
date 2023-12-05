document.addEventListener('DOMContentLoaded', function () {
    const tagContainer = document.getElementById('tag-container');
    const addTagButton = document.getElementById('add-tag-button');

    addTagButton.addEventListener('click', function () {
        const newTag = createTagElement('')
        tagContainer.appendChild(newTag)
    });

    function createTagElement(tagText) {
        const tagElement = document.createElement('input')
        tagElement.type = 'text'
        tagElement.placeholder = '#'
        tagElement.value = tagText
    
        
        return tagElement;
    }
});
