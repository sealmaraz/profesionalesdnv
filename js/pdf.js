        // URL del PDF a previsualizar
        const pdfUrl = '../docs/novedades/Nota_despidos_ 2023_050124.pdf';

        // Función para cargar y mostrar el PDF
        function renderPDF(url, canvasContainer) {
            // Cargar el PDF
            pdfjsLib.getDocument(url).promise.then(pdf => {
                // Mostrar la primera página
                pdf.getPage(1).then(page => {
                    const scale = 1.5;
                    const viewport = page.getViewport({ scale: scale });

                    // Crear lienzo para la página PDF
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Adjuntar el lienzo al contenedor
                    canvasContainer.appendChild(canvas);

                    // Renderizar la página en el lienzo
                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });
                });
            });
        }

        // Llamar a la función de carga del PDF al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const pdfContainer = document.getElementById('pdf-container');
            renderPDF(pdfUrl, pdfContainer);
        });