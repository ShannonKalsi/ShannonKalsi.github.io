// Placeholder for post functionality, you can extend this later.
document.querySelector('.post-btn').addEventListener('click', function() {
    const textarea = document.querySelector('textarea');
    const feed = document.querySelector('.feed');
    
    const post = document.createElement('div');
    post.classList.add('post');
    post.innerHTML = `<p><strong>You</strong> posted: <em>${textarea.value}</em></p>`;
    
    feed.appendChild(post);
    textarea.value = ''; // Clear the textarea after posting.
});
