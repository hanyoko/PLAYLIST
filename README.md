# 🎵 PLAYLIST 🎶
![baseball](https://user-images.githubusercontent.com/119985173/236123763-b54cada4-17d6-4acb-85c8-a30ce8fd79b0.PNG)

# 🏠 [HOME PAGE](http://hanyoko.dothome.co.kr/baseball)

# 🖥️ 프로젝트 소개
내 꿈은 홈런왕
> - Javascript 조건문 수업을 들었을 때, 이해가 되지 않아 복습을 위해 팀을 모아 만든 야구게임 프로젝트입니다. 

## ⏱ 개발 기간
> - 22.11.18 - 22.11.25

## 📋 야구 규칙
> - Strike 3개 : Out 1개
> - Ball 4개 : 출루 1개
> - 출루 4개 : 1점
> - Out 3개 : 공수교대
> - Homerun : 출루 인원 + 타자 = 점수<br/> ex) 출루 2명일 때, 타자가 홈런을 친다면 => 3점
> - 턴 : 1회 ~ 9회
> - 회 : 초 - 컴퓨터의 턴 / 말 - 사용자의 턴

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
  
#### 컴퓨터 스트라이크
![Baseball 컴퓨터-스트라이크](https://user-images.githubusercontent.com/119985173/236150307-2ff9719a-dc0a-4ffc-8e5b-53703dc36b69.PNG)

#### 컴퓨터 볼, 아웃
![Baseball 컴퓨터-볼, 아웃](https://user-images.githubusercontent.com/119985173/236150426-2fd4e133-d04c-4a32-88f1-b701b19148f7.PNG)

#### 컴퓨터 파울
![Baseball 컴퓨터-파울](https://user-images.githubusercontent.com/119985173/236151170-b447ed0e-149d-40cd-8e09-e90a6fa36814.PNG)

#### 컴퓨터 안타
![Baseball 컴퓨터-안타](https://user-images.githubusercontent.com/119985173/236154313-58d46965-1738-45ce-8a47-e1e48eb3c06a.PNG)

#### 컴퓨터 필살기
![Baseball 컴퓨터-필살기](https://user-images.githubusercontent.com/119985173/236151098-57c83190-06c5-4274-83a9-4c91b754502c.PNG)

#### 컴퓨터 공수교대
![Baseball 컴퓨터-공수교대](https://user-images.githubusercontent.com/119985173/236150885-7eabbcf4-7565-4241-8b79-77f86c4d6f21.PNG)

#### 컴퓨터 홈런
![Baseball 컴퓨터-홈런](https://user-images.githubusercontent.com/119985173/236150795-5781e10e-ca86-472b-bbde-9882e33e6d8f.PNG)

#### 사용자 스트라이크
![Baseball 사용자-스트라이크](https://user-images.githubusercontent.com/119985173/236152203-d03f8f84-15c3-4e6d-9c47-63823b865915.PNG)

#### 사용자 볼
![Baseball 사용자-볼](https://user-images.githubusercontent.com/119985173/236152128-ee6d4aca-f1b4-4338-95b2-b17cce4394b6.PNG)

#### 사용자 파울
![Baseball 사용자-파울](https://user-images.githubusercontent.com/119985173/236152351-4cd4123e-4246-4605-8abf-3ef92e9adab2.PNG)

#### 사용자 안타
![Baseball 사용자-안타](https://user-images.githubusercontent.com/119985173/236152267-39031587-35db-4914-9557-74e263e2a6cc.PNG)

#### 사용자 홈런
![Baseball 사용자-홈런](https://user-images.githubusercontent.com/119985173/236154772-3054a6c6-5ed3-4831-9e4d-342743da936d.PNG)

#### 사용자 필살기
![Baseball 사용자-필살기](https://user-images.githubusercontent.com/119985173/236152457-4ef35966-0195-493b-b6bf-d8d9b72e0c81.PNG)

#### 사용자 공수교대
![Baseball 사용자-공수교대](https://user-images.githubusercontent.com/119985173/236152039-cf76f76e-0c6c-4c0d-881c-9434936fe27f.PNG)
  
### 4. 게임종료
  
#### 사용자 승리
![Baseball 사용자 승리](https://user-images.githubusercontent.com/119985173/236151637-c3ccd841-ad6e-4d18-a6d3-f7fb695c55cb.PNG)
![Baseball 사용자 승리2](https://user-images.githubusercontent.com/119985173/236151712-844c8124-c9cc-4312-be9f-d7ddcb481e59.PNG)

#### 사용자 패배 
![Baseball 사용자 패배](https://user-images.githubusercontent.com/119985173/236151815-37888276-75cb-495f-bf10-d2ef2a886e4d.PNG)
![Baseball 사용자 패배2](https://user-images.githubusercontent.com/119985173/236151915-6daceac4-0578-4f73-8bb5-5b7071629837.PNG)

#### Draw
![Baseball Draw](https://user-images.githubusercontent.com/119985173/236151576-1a7fb089-c0c0-470e-8367-fc0e71042967.PNG)
![Baseball Draw2](https://user-images.githubusercontent.com/119985173/236154836-f51a4e47-8fa7-4191-bfaa-56cd8d0fbf27.PNG)
</details>
