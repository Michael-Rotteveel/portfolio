import EditorJS from "@editorjs/editorjs";
import Header from '@editorjs/header';
import List from '@editorjs/list';

const editor = new EditorJS({
    holder: 'editor',
    tools: {
        header: {
            class: Header,
            inlineToolbar: true,
        },
        list: {
            class: List,
            inlineToolbar: true,
        },
    },
});

editor.isReady
    .then(() => {
        console.clear();
        console.log('Editor.js is ready to work!');
        /** Do anything you need after editor initialization */
    })
    .catch((reason) => {
        console.clear();
        console.log(`Editor.js initialization failed because of ${reason}`);
    });

document.getElementById('save').onclick = () => {
    editor.save().then((outputData) => {
        console.log('Article data: ', outputData);
    }).catch((error) => {
        console.log('Saving failed: ', error);
    });
};
