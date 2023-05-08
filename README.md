# 🎵 PLAYLIST 🎶
![playlist](https://user-images.githubusercontent.com/119985173/236849400-812dcde6-84dc-4595-bbb5-941fdce8c477.PNG)

# 🏠 [HOME PAGE](http://hanyoko.dothome.co.kr/playlist)

# 🖥️ 프로젝트 소개
## YZA : 


> - PHP와 Javascript를 이용해서 만든 음악 플레이리스트 사이트입니다.

## ⏱ 개발 기간
> - 22.12.20 - 23.01.03

## 👨‍👧‍👧 팀 프로젝트 멤버
> - 김수민
> - 고요한
> - 이재훈

## ⚾ 게임 소개
### 1. 게임시작화면
![Baseball1](https://user-images.githubusercontent.com/119985173/236149422-e5222010-18b3-430a-9147-859ed616f3b5.PNG)
> - 게임시작 전 사용자의 이름을 입력합니다.

![Baseball2](https://user-images.githubusercontent.com/119985173/236149488-464d9b25-4ffe-4ab9-be96-13e2d061ef2e.PNG)
> - 여기서 while을 사용해 조건문을 걸었습니다.
> - Prompt에 이름을 세글자를 초과하면 다음 단계로 넘어가지 않도록 했고,
> - 세글자 이내로 입력 시 력한 팀 이름을 변수 값에 담은 후 break를 통해 빠져나가도록 설계했습니다.

![Baseball3](https://user-images.githubusercontent.com/119985173/236149535-951365e8-b0e3-4fe4-a53e-81a792e4ded8.PNG)
> - [팀 이름 변수 값] 팀의 승리를 응원합니다 ! 라는 알림창과 함께 게임이 시작됩니다. 

### 2. 게임시작
![Baseball4](https://user-images.githubusercontent.com/119985173/236149641-d7bc8e94-3908-4bf0-af4e-c01f80f39279.PNG)
> - 상단 중앙에 위치한 점수판에 팀 이름 변수값이 입력되고 각 회가 종료 시 총 점수가 나타납니다.
> - 점수판 아래는 텍스트 출력판입니다. 버튼을 눌러 출력된 랜덤 값에 맞는 텍스트가 출력됩니다.
> - 왼쪽 하단에는 랜덤값의 결과에 맞게 야구공이 추가됩니다.
> - 중앙에는 출루 갯수에 따라 플레이어가 생성됩니다. (검정 : 컴퓨터 / 빨강 : 사용자)
> - 오른쪽 하단에 위치한 버튼은 Strike / Ball / 필살기 3개로 구분해두었습니다.<br/>
> (각 버튼에, 클릭 시 Math.ceil과 Math.random을 이용해 랜덤 값이 출력되도록했습니다.)
> - 필살기는 각 턴에 단 한번만 사용이 가능하고, 사용 후에는 비활성화 되도록 했습니다.<br/>
> (컴퓨터의 필살기 : 아웃 / 사용자의 필살기 : 홈런)
> - 아웃이 3개가 되어 공수교대를 하거나 필살기를 사용 시 필드 중앙에 크게 텍스트가 출력되도록 설계했습니다.

### 3. 인게임
  
admin 로그인 ![admin 로그인](https://user-images.githubusercontent.com/119985173/236879062-3617044b-c3b1-4f07-8057-dda5eaa262ec.PNG)
admin 음악관리 ![admin 음악괸리](https://user-images.githubusercontent.com/119985173/236879065-077d775a-9697-46f2-b9a1-287fd46b307e.PNG)

YZA 메인화면 ![YZA 메인화면](https://user-images.githubusercontent.com/119985173/236879070-3e0cf877-e03d-4859-bf89-8b21c92fb97f.PNG)
YZA 로그인 전 ![YZA 로그인 전](https://user-images.githubusercontent.com/119985173/236879068-19495748-ad81-42a3-b3aa-4b8f38248604.PNG)
YZA 시작화면 ![YZA 시작화면](https://user-images.githubusercontent.com/119985173/236879075-e0ced4c0-3cbf-496b-93c4-9731f3674580.PNG)
회원가입 ![회원가입](https://user-images.githubusercontent.com/119985173/236879118-3afc38d4-a43a-493b-979d-697e46ef9dcc.PNG)
아이디 중복체크(이미 등록된 아이디) ![아이디 중복체크(이미 등록된 아이디)](https://user-images.githubusercontent.com/119985173/236879098-5d3c550f-39ac-4f77-ad0b-a6a32025a0c6.PNG)
아이디 중복체크(사용가능한 아이디) ![아이디 중복체크(사용가능한 아이디)](https://user-images.githubusercontent.com/119985173/236879097-94fc80f3-fece-451d-9a1d-3c6d04e6ff0a.PNG)
비밀번호 체크 ![비밀번호 체크](https://user-images.githubusercontent.com/119985173/236879088-56c642be-e79f-4872-be90-57ae5d8c0bac.PNG)
비밀번호 확인 ![비밀번호 확인](https://user-images.githubusercontent.com/119985173/236879089-cda6a296-8514-473f-ade3-9de50d1119cf.PNG)
휴대폰 번호 확인 ![휴대폰 번호 확인](https://user-images.githubusercontent.com/119985173/236879122-d11dc42f-f7f4-463c-843d-8200b3b3433d.PNG)
이름 확인 ![이름 확인](https://user-images.githubusercontent.com/119985173/236879102-0abb05f3-c654-436b-b8b5-562a90bb920b.PNG)
회원가입완료 ![회원가입 완료](https://user-images.githubusercontent.com/119985173/236879115-55d2331a-1cc1-4807-97fc-f2cabf164678.PNG)
로그인 완료 ![로그인 완료](https://user-images.githubusercontent.com/119985173/236879085-04ed54a8-8c1b-4cce-9db4-2ed0b448a014.PNG)
로그아웃 되었을 때 ![로그아웃 되었을 때](https://user-images.githubusercontent.com/119985173/236879078-254d2cba-8ae6-40e1-ae60-74bb10d51a50.PNG)
로그아웃 된 메뉴 ![로그아웃 된 메뉴](https://user-images.githubusercontent.com/119985173/236879080-5ca6abe8-7115-4969-a575-0930d732ad71.PNG)
로그인 된 메뉴 ![로그인 된 메뉴](https://user-images.githubusercontent.com/119985173/236879083-d00fafd8-ee50-40c5-b7eb-0c355a2a1b85.PNG)
YZA 설명 ![YZA 설명](https://user-images.githubusercontent.com/119985173/236879072-77b70b5b-e11f-4861-a8c4-8ba2f9e0da44.PNG)
음악감상 ![음악 감상](https://user-images.githubusercontent.com/119985173/236879100-302e2995-5ecb-49d0-bd3c-ba62465c6d13.PNG)
전체 노래 목록 ![전체 노래 목록](https://user-images.githubusercontent.com/119985173/236879107-245d3d1f-931c-42f3-b9bb-648444449ea4.PNG)
클릭한 앨범들 ![클릭한 앨범들](https://user-images.githubusercontent.com/119985173/236879113-c8f38ee6-ff6a-47db-b981-a4216c821174.PNG)
전체 앨범 클릭 ![전체 앨범 클릭](https://user-images.githubusercontent.com/119985173/236879111-bfa73c95-9a36-4bb2-9987-6e2c2cabbaf5.PNG)
뮤직리스트 ![뮤직리스트](https://user-images.githubusercontent.com/119985173/236879086-6fbd19ca-2d07-407e-8e91-df92c14027e0.PNG)
사용자의 뮤직리스트(담기 전) ![사용자의 뮤직리스트(담기 전)](https://user-images.githubusercontent.com/119985173/236879093-c02830eb-bcbc-41c8-a3d0-fb5ebfd4a072.PNG)
원하는 음악을 담았을 때 ![원하는 음악을 담았을 때](https://user-images.githubusercontent.com/119985173/236879099-4c7e1e28-1ad9-47bf-9a80-f9059ff5aff7.PNG)
사용자의 뮤직리스트(담기 후) ![사용자의 뮤직리스트(담기 후)](https://user-images.githubusercontent.com/119985173/236879096-9597f68a-cc42-4766-bcf6-8e62f51e7168.PNG)
음악 등록하기 ![음악 등록하기](https://user-images.githubusercontent.com/119985173/236879101-2d6647ff-7a5d-4036-81c5-123a62964032.PNG)
