const wrappers = document.querySelectorAll('.wrapper');

wrappers.forEach(wrapper => {
    const question = wrapper.querySelector('.question');
    const answer = wrapper.querySelector('.answer');
    const icon = question.querySelector('i'); // Lấy phần tử icon

    question.addEventListener('click', function() {
        // Đóng tất cả câu trả lời khác
        wrappers.forEach(otherWrapper => {
            if (otherWrapper !== wrapper) {
                const otherAnswer = otherWrapper.querySelector('.answer');
                const otherQuestion = otherWrapper.querySelector('.question');
                const otherIcon = otherQuestion.querySelector('i'); // Lấy icon của câu hỏi khác
                if (otherAnswer.classList.contains('expanding')) {
                    otherAnswer.classList.remove('expanding');
                    otherAnswer.classList.add('collapsing');
                }
                // Xóa lớp active
                otherQuestion.classList.remove('active');
                otherIcon.classList.remove('fa-angle-down'); // Đặt icon về mũi tên phải
                otherIcon.classList.add('fa-angle-right');
            }
        });

        // Mở hoặc đóng câu trả lời hiện tại
        if (answer.classList.contains('expanding')) {
            answer.classList.remove('expanding');
            answer.classList.add('collapsing');
            icon.classList.remove('fa-angle-down');
            icon.classList.add('fa-angle-right'); // Đổi icon về mũi tên phải
        } else {
            answer.classList.remove('collapsing');
            answer.classList.add('expanding');
            icon.classList.remove('fa-angle-right');
            icon.classList.add('fa-angle-down'); // Đổi icon thành mũi tên xuống
        }

        // Thêm hoặc xóa lớp active cho câu hỏi
        question.classList.toggle('active');
    });
});