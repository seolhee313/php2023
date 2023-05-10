<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    
    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/adminAgree.png, ../assets/img/adminAgree@2x.png 2x, ../assets/img/adminAgree@3x.png 3x" />
                <img src="../assets/img/adminAgree.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->

        <div class="join__inner">
            <h2>이용약관</h2>
            <div class="index">
                <ul>
                    <li class="active">1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>

            <div class="join__agree">
                <div class="scroll">제1조 (목적)<br>
                    본 약관은 ChatGPT (이하 "회사"라 함)가 제공하는 인공지능 채팅 서비스(이하 "서비스"라 함)를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항 등 기본적인 사항을 규정함을 목적으로 합니다.<br>
                    <br>
                    제2조 (용어의 정의)<br>
                    <br>
                    이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br>
                    (1) "서비스"라 함은 인공지능 채팅 서비스를 의미합니다.<br>
                    (2) "이용자"라 함은 본 약관에 따라 회사가 제공하는 서비스를 이용하는 자를 말합니다.<br>
                    (3) "계정"이라 함은 이용자가 서비스를 이용하기 위해 회사가 제공하는 아이디와 비밀번호를 말합니다.<br>
                    (4) "게시물"이라 함은 이용자가 서비스를 통해 게시한 글, 사진, 동영상, 댓글 등의 정보를 말합니다.<br>
                    (5) "광고"라 함은 회사 또는 제3자가 서비스 상에 노출하는 상품, 서비스 또는 기타 콘텐츠 등을 말합니다.<br>
                    <br>
                    이 약관에서 정의하지 않은 용어는 관계 법령 및 일반 관례에 따릅니다.<br>
                    <br>
                    제3조 (약관의 게시 및 개정)<br>
                    <br>
                    회사는 이 약관의 내용을 이용자가 알 수 있도록 서비스 초기 화면에 게시합니다.<br>
                    회사는 합리적인 사유가 발생할 경우 이 약관을 개정할 수 있으며, 이 경우 개정된 약관은 제1항과 같은 방법으로 공지합니다.<br>
                    회사가 약관을 개정할 경우, 개정된 약관의 적용일자와 개정 사유를 명시하여 공지합니다.<br>
                    이용자는 개정된 약관에 대해 거부할 권리가 있으며, 이 경우 이용자는 회원 탈퇴를 요청할 수 있습니다.<br>
                    제4조 (서비스의 내용)<br>
                    <br>
                    회사가 제공하는 서비스는 인공지능 채팅 기능을 중심으로 하며, 이를 통해 이용자가 질문을 입력하면 챗봇이 대답을 제공합니다.<br>
                    회사는 이용자에게 일정한 광고를 제공할 수 있으며, 이용자는 광고를 거부할 수 있습니다.<br>
                </div>
                <div class="check">
                    <input type="checkbox" id="agreeCheck1" class="agreeCheck">
                    <label for="agreeCheck1">블로그 이용약관에 동의합니다.</label>
                </div>
                <div class="scroll">제1조 (수집하는 개인정보 항목 및 수집방법)<br>
                    <br>
                    회사는 서비스 제공 및 계약 이행을 위해 필요한 최소한의 개인정보만을 수집합니다.<br>
                    회사가 수집하는 개인정보 항목은 다음과 같습니다.<br>
                    필수항목 : 이메일 주소<br>
                    선택항목 : 닉네임, 프로필 사진 등<br>
                    회사는 다음과 같은 방법으로 개인정보를 수집합니다.<br>
                    이용자가 직접 회원가입을 할 때<br>
                    이용자가 서비스를 이용하는 과정에서 자동으로 생성되는 정보를 수집하는 경우<br>
                    제2조 (개인정보의 이용 목적)<br>
                    회사는 수집한 개인정보를 다음의 목적을 위해 사용합니다.<br>
                    <br>
                    서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산<br>
                    이용자 식별 및 본인 확인<br>
                    마케팅 및 광고에 활용<br>
                    기타 법령 및 회사 내부 정책에 따라 필요한 목적으로 이용<br>
                    제3조 (개인정보의 제공)<br>
                    <br>
                    회사는 이용자의 개인정보를 제3자에게 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.<br>
                    이용자가 사전에 동의한 경우<br>
                    법령에 의거해 회원정보 제공이 필요한 경우<br>
                    회사와 제휴한 업체에게 개인정보를 제공하는 경우<br>
                    회사는 서비스 제공에 필요한 업무를 외부 업체에 위탁할 경우, 수탁업체와 개인정보 처리 관련 계약을 체결하고 필요한 사항을 규제합니다.<br>
                    제4조 (개인정보의 보유 및 파기)<br>
                    <br>
                    회사는 이용자의 개인정보를 수집, 이용 목적이 달성되면 지체 없이 파기합니다.<br>
                    다만, 회원탈퇴 후에도 이용자의 서비스 이용 기록 등 일부 정보는 관련 법령 및 회사 내부 정책에 따라 일정 기간 저장 후 파기할 수 있습니다.<br>
                    개인정보 파기는 회사 내부 방침 및 관련 법령에 따라 안전하게 처리됩니다.<br>
                </div>
                <div class="check">
                    <input type="checkbox" id="agreeCheck2" class="agreeCheck">
                    <label for="agreeCheck2">개인정보 수집 및 이용약관에 동의합니다.</label>
                </div>
            </div>
            <div class="checkBtn">
                <p class="agreeMsg"></p>
                <a href="joinSave.php" class="btnStyle agreeBtn">동의</a>
            </div>
            <!-- <a href="joinSave.php"><button type="submit" class="btnStyle agreeBtn">동의</button></a> -->
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script>
        // 체크 표시 검사
        const agreeBtn = document.querySelector(".agreeBtn");
        const agreeCheck = document.querySelectorAll(".agreeCheck");
        const agreeMsg = document.querySelector(".agreeMsg");

        agreeBtn.addEventListener("click", (e) => {

            agreeCheck.forEach((check) => {
                if(check.checked == false){
                    agreeMsg.innerText = "체크박스를 다시 한 번 확인해주세요!";
                    e.preventDefault();
                }
            });
        })
    </script>
</body>
</html>