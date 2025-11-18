<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерактивная Пагинация</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f7f7f7;
            margin: 0;
        }

        .pagination-container {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .pagination-item {
            display: flex;
            align-items: center;
            margin: 0 4px;
        }

        .page-link, .ellipsis {
            display: block;
            min-width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            text-decoration: none;
            color: #333;
            font-size: 16px;
            padding: 0 8px;
            transition: color 0.2s, background-color 0.2s;
            cursor: pointer;
            user-select: none;
        }

        .page-link.active {
            background-color: #e5e5e5;
            color: #1a1a1a;
            font-weight: bold;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .page-link:not(.active):hover {
            color: #007bff;
        }

        .ellipsis {
            cursor: default;
            color: #666;
        }

        .arrow-link {
            padding: 0 12px;
            font-size: 18px;
            color: #666;
        }

        .arrow-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <nav class="pagination-container" aria-label="Пагинация">
        <div class="pagination-item">
            <a href="#" class="page-link arrow-link" id="prev">&lt;</a>
        </div>

        <div id="page-numbers"></div>

        <div class="pagination-item">
            <a href="#" class="page-link arrow-link" id="next">&gt;</a>
        </div>
    </nav>

    <script>
        const totalPages = 18;
        const visibleCount = 3; // сколько страниц видно одновременно
        let currentPage = 1;

        const pageNumbersContainer = document.getElementById('page-numbers');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        function renderPagination() {
            pageNumbersContainer.innerHTML = '';

            // Вычисляем диапазон отображаемых страниц
            let start = Math.max(1, currentPage - 1);
            let end = Math.min(start + visibleCount - 1, totalPages - 1);

            if (end >= totalPages - 1) {
                start = totalPages - visibleCount;
                if (start < 1) start = 1;
            }

            // Создаём элементы страниц
            for (let i = start; i <= end; i++) {
                const div = document.createElement('div');
                div.className = 'pagination-item';
                const a = document.createElement('a');
                a.textContent = i;
                a.href = '#';
                a.className = 'page-link' + (i === currentPage ? ' active' : '');
                a.addEventListener('click', e => {
                    e.preventDefault();
                    currentPage = i;
                    renderPagination();
                });
                div.appendChild(a);
                pageNumbersContainer.appendChild(div);
            }

            // Добавляем многоточие и последнюю страницу
            if (end < totalPages - 1) {
                const dots = document.createElement('div');
                dots.className = 'pagination-item';
                dots.innerHTML = '<span class="ellipsis">...</span>';
                pageNumbersContainer.appendChild(dots);
            }

            const last = document.createElement('div');
            last.className = 'pagination-item';
            const aLast = document.createElement('a');
            aLast.textContent = totalPages;
            aLast.href = '#';
            aLast.className = 'page-link' + (currentPage === totalPages ? ' active' : '');
            aLast.addEventListener('click', e => {
                e.preventDefault();
                currentPage = totalPages;
                renderPagination();
            });
            last.appendChild(aLast);
            pageNumbersContainer.appendChild(last);
        }

        // Стрелка "вперёд"
        next.addEventListener('click', e => {
            e.preventDefault();
            if (currentPage < totalPages) {
                currentPage++;
                renderPagination();
            }
        });

        // Стрелка "назад"
        prev.addEventListener('click', e => {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                renderPagination();
            }
        });

        renderPagination();
    </script>

</body>
</html>
