import Font from '@ckeditor/ckeditor5-font/src/font';
ClassicEditor
.create( document.querySelector( '#editor' ), {
  fontColor: {
              colors: [
                  {
                      color: 'hsl(0, 0%, 0%)',
                      label: 'Black'
                  },
                  {
                      color: 'hsl(0, 0%, 30%)',
                      label: 'Dim grey'
                  },
                  {
                      color: 'hsl(0, 0%, 60%)',
                      label: 'Grey'
                  },
                  {
                      color: 'hsl(0, 0%, 90%)',
                      label: 'Light grey'
                  },
                  {
                      color: 'hsl(0, 0%, 100%)',
                      label: 'White',
                      hasBorder: true
                  },

                  // ...
              ]
          },
          fontBackgroundColor: {
              colors: [
                  {
                      color: 'hsl(0, 75%, 60%)',
                      label: 'Red'
                  },
                  {
                      color: 'hsl(30, 75%, 60%)',
                      label: 'Orange'
                  },
                  {
                      color: 'hsl(60, 75%, 60%)',
                      label: 'Yellow'
                  },
                  {
                      color: 'hsl(90, 75%, 60%)',
                      label: 'Light green'
                  },
                  {
                      color: 'hsl(120, 75%, 60%)',
                      label: 'Green'
                  },

                  // ...
              ]
          },
          toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'bulletedList', 'numberedList', 'fontColor', 'fontBackgroundColor', 'undo', 'redo']
} )
.catch( error => {
console.error( error );
} );
