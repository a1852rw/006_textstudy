# JSTQB Advanced Level Test Manager サンプル問題 解答(翻訳)
## 方針
ISTQBサイトに掲載されているサンプル問題の解答解説を翻訳する。

&nbsp;

## サンプル問題参照先
- Certified Tester Advanced Level Test Manager (CTAL-TM)
    - [https://www.istqb.org/certifications/test-manager](https://www.istqb.org/certifications/test-manager)
    - ISTQBのテストマネージャー試験紹介ページ右側リンクよりサンプル問題をダウンロード
    - DL日時：2022/4/8
    - ファイル名
        - ISTQB-CTAL-TM_Sample-Exam-A-Questions_v1.3.1.pdf
        - ISTQB-CTAL-TM_Sample-Exam-A-Answers_v1.3.1.pdf

&nbsp;

## 翻訳済みサンプル問題 解答解説
### 問1：TM-1.2.1 (配点 3点)
#### 解答
b,e

#### 解説
- a) 正しくありません。TDDはユニットテストケースの設計から始まります。アジャイルプロセスでは通常、詳細な設計仕様はありません。
- b) 正しい。パフォーマンス問題の30%は、Webサービスに関連して報告されています。これら（またはその一部）は、未定義のSLAが原因である可能性がある。
- c) 正しくありません。統合テストレベルがない
- d) 正しくありません。単体テストは、開発の下っ端にある
- e)は正しい。パフォーマンスです。テストは実施しなければならない、10日目までにシステムが安定することはない

--- 

### 問2：TM-1.3.1 (配点 2点)  
#### 解答
a

#### 解説
- a) 正解
    - 1) ユーザーストーリーUS03-20の最大同時リクエスト数10,000に対して、最大許容応答時間10秒の性能テストが抜けている。
    - 2) ユーザーストーリーUS 02-20のテスト条件が抜けている
- b) 正しくありません
- c) 正しくありません
- d) 正しくありません

---

### 問3：TM-1.3.2 (配点 1点)
#### 解答
a,d

#### 解説
- a)は正しい。粗い粒度の試験条件を洗練させるための試験設計の質問は、回答するのに高額になる
- b) 正しくありません。詳細なテスト条件の整備が大変になる（シラバス）
- c) 正しくありません。粗い粒度のテスト条件を絞り込むテスト設計時の質問は、専門家が答えれば良い。
- d) 正しい。詳細なテスト条件を指定することで、貧弱なテスト基盤の代わりとなり、欠陥防止に貢献することができる
- e) 正しくありません。経営者は、一般的にそのレベルの詳細さを要求しない

---

### 問4：TM-1.4.1 (配点 2点)
#### 解答
a 

#### 解説
- a) 正しくありません。このリスク項目をカバーするかもしれないが、ネガティブテストであり、期待される結果を含んでいない。このリスク項目の探索的ネガティブテストとしては良いが
- b) 正しくありません。完全に良い陽性の論理テストであるが、リスク項目をカバーしない。
- c) 正しい。発生する入力があり、シナリオに沿った正しい期待される結果があり、リスク項目に関連する。
- d) 正しくありません。期待される結果が間違っているので、正しくない。

--- 

### 問5：TM-1.5.1 (配点 2点)
#### 解答
a 

#### 解説
- a) 正しい。このリスクは、アプリケーションの中核的な機能に関するものである。
- b) 正しくありません。非常に高い影響と高い可能性を持つテストは、このテストの前に実行されるべきです。
- c) 正しくありません。このリスク項目が他のリスク項目とどのように関連しているかが分からないので、確実に正しいとは言えない
- d) 正しくありません。影響度と尤度の組み合わせに基づいて、どのように工数配分を決定しているか分からないので、確実に正しいとは言えない。

---

### 問6：TM-1.6.1 (配点 2点)
#### 解答
b,e

#### 解説
- a) 正しくありません。選択肢 B の状況、あるいは単にテストがブロックされただけで、リスクオーダー外のテストの実行を説明できる。
- b) 正しい。02.019は02.010とは異なる要件を対象としています。
- c) 正しくありません。テストの順序に関する問題を評価することは理にかなっていますが、その際にテストの実行を停止する必要はありません。
- d) 正しくありません。不具合を発見することだけがテストの目的ではない
- e) 正しい。リスクベースのテスト戦略では、高リスクのテストが低リスクのテストより優先されます。

--- 

### 問7：TM-1.7.1 (配点 1点)
#### 解答
b,e

#### 解説
- a) 正しくありません。タイムリーに測定できなかった
- b) 正しい シラバスより
- c) 正しくありません。適時に測定できなかった
- d) 正しくありません。テスト解析の進捗に関係する
- e) 正しい。シラバスより

--- 

### 問8：TM-1.8.1 (配点 1点)
#### 解答
a

#### 解説
- a)は正しい。シラバス1.3項による
- b) 正しくありません
- c) 正しくありません
- d) 正しくありません

--- 

### 問9：TM-1.8.2 (配点 2点)
#### 解答
a, c

#### 解説
a)は正しい。品質リスク分析が正しかったかどうかを評価するために、欠陥情報をレトロスペクティブに分析したい
b) 正しくありません。実装時に実施することになっている
c) 正しい。エンロールは重要な要件領域であり、要件ベースのテスト戦略のもと、そのような領域で欠陥が見逃されていないか、テストレトロスペクティブで確認する必要がある
d) 正しくありません。これはテストクロージャの一部であるが、レトロスペクティブの一部ではない。
e) 正しくありません。これは、テストコントロールの一部である


---

### 問10：TM-2.2.1 (配点 3点)
#### 解答
d

#### 解説
a) 正しくありません。既婚者は現在の顧客ではないので（配偶者を裏切っていない限り）、請求書が正しく発行されているかどうかを気にする必要はないはずです。
b) 正しくありません。政府機関の職員は、アプリケーションのユーザーである職員を除いて、マッチングがどの程度うまく機能するかについて本当に気にしないでしょう（政府機関の職員であることとは関係ない）。
c) 正しくありません。ユーザーは、会社が適切な税金を支払っているかどうかについては、ユーザーが適切に請求されている限り、実際にはあまり気にしていない
d) 正しい。経営者や利害関係者は、顧客が満足し、会社が利益を上げ、法令を遵守するために、3種類のテストすべてに気を配らなければなりません。政府機関は、規則を遵守することに気を配ります。

---

### 問11：TM-2.2.2 (配点 1点)
#### 解答
c

#### 解説
a) 正しくありません。これも正しいが、プロジェクトマネジメントがテストに影響を与えるのではなく、テストがテクニカルサポートに影響を与えるということである。
b) 正しくありません。正しいが、テストがプロジェクトマネジメントの成果物にどのように影響するかについてであり、プロジェクトマネジメントの成果物がテストにどのように影響するかについてではない。
c) 正しい。テスト計画は、より大きなプロジェクト計画と整合していなければならない。
d) 正しくありません。要件はプロジェクトマネジメントの成果物ではないし、さらに、この記述は要件ベースのテスト戦略に従っている場合にのみ正しい。

--- 

### 問12：TM-2.2.3 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. Some non-functional risks may be mitigated early, but some may be mitigated later in the life cycle
b) Is correct. From the syllabus
c) Is not correct. Only some test planning can be delegated to both TAs and TTAs
d) Is not correct. All non-functional testing does not have to follow functional testing (but it should be based on perceived risks)

---

### 問13：TM-2.3.1 (配点 1点)
#### 解答
d

#### 解説
a) Is not correct. Testing measures quality – it does not improve it (subsequent debugging would do)
b) Is not correct. There is no correlation between risk types (although these are both the same risk type) and functional/non-functional testing
c) Is not correct. Project risks do help determine which test levels, but so do product risks
d) Is correct. From syllabus

--- 

### 問14：TM-2.3.2 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. These are the four activities in risk-based testing
b) Is not correct. These are techniques for risk identification, which is only part of the analysis process
c) Is correct. As these are four of the eight different techniques given in the syllabus
d) Is not correct. This is one of the factors influencing the likelihood of a risk item

---

### 問15：TM-2.3.3 (配点 3点)
#### 解答
c,e

#### 解説
a) Is not correct. Is a project risk (and a very real one for any start-up)
b) Is not correct. Is a project risk, not a quality risk, and it is also of vanishingly small likelihood given the amazing range of options available in the cloud computing retail market?
c) Is correct. Calculating loyalty points is a function of the system and functional accuracy is a quality sub-characteristic
d) Is not correct. Is definitely a risk, but it’s not related to the quality of the system, but rather due to the discounts being offered; specifically, it’s an operational risk that can arise after release
e) Is correct. We are promising high reliability and reliability is a quality characteristic

---

### 問16：TM-2.3.4 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. We always want test effectiveness (e.g., ability to detect defects) to be high no matter what level of risk is being mitigated
b) Is not correct. From syllabus
c) Is not correct. From syllabus
d) Is not correct. From syllabus

---

### 問17：TM-2.3.5 (配点 1点)
#### 解答
b 

#### 解説
a) Is not correct. From syllabus
b) Is correct. We do not want to leave all prioritization and effort allocation to individual testers, and also discovery of defects can only occur after testing (and so some prioritization and effort allocation) has already started
c) Is not correct. From syllabus
d) Is not correct. From syllabus

---

### 問18：TM-2.4.1 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. For the reasons stated for the correct answer
b) Is correct. For a mature application, the main mission of testing is really building confidence that the application continues to work properly. Automated regression testing helps achieve that efficiently, so the test process improvement and the application are aligned. While the idea of automating the regression testing for this mature application is a good one, automation does not tend to find many defects. So, the mission statement is not aligned with the test process improvement, or with the real test needs of a mature application
c) Is not correct. For the reasons stated for the correct answer
d) Is not correct. For the reasons stated for the correct answer


--- 

### 問19：TM-2.4.2 (配点 2点)
#### 解答
c

#### 解説
a) Is not correct. Problems with test environment readiness are classic test-related project risks
b) Is not correct. Problems with test staff availability and qualification are classic test-related project risks
c) Is correct. While this is a significant project risk, it is not a test-related project risk. What the test team needs from the marketing team—the requirements—are already complete
d) Is not correct. Problems with tool readiness are classic test-related project risks

--- 

### 問20：TM-2.4.3 (配点 1点)
#### 解答
b 

#### 解説
a) Is not correct. Because at least two of these examples are mismatched
b) Is correct. Because analytical risk-based testing includes risk-based test prioritization, methodical testing follows a checklist (which in this example includes traversing links on a site), process-compliant testing can include Agile process compliance, and consultative testing involves being externally directed
c) Is not correct. Because at least two of these examples are mismatched
d) Is not correct. Because at least two of these examples are mismatched

---

### 問21：TM-2.4.4 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. The process being compliant with in this case is Agile methodology, not IEEE 829
b) Is correct. Agile lifecycles emphasize lightweight documentation
c) Is not correct. IEEE 829 is documentation-heavy and thus incompatible with Agile philosophies on documentation and with reactive test strategies
d) Is not correct. Even reactive tests have charters and even Agile lifecycles have acceptance criteria


--- 

### 問22：TM-2.5.1 (配点 3点)
#### 解答
a,b

#### 解説
a) Is correct. Considering historical averages for estimation is one recognized estimation technique
b) Is correct. This is a common technique for managing experience-based testing and has estimation implications
c) Is not correct. As cited in the syllabus, developers following known Agile best practices will remove as many as half the defects prior to system testing
d) Is not correct. Agile methods eschew highly detailed documentation, including test documentation
e) Is not correct. There is nothing in the scenario to make this re-use necessary or likely


---

### 問23：TM-2.5.2 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. Defect repair time may delay testing but do not require test effort
b) Is not correct. Even mature test processes could last long if effort is high
c) Is not correct. Detailed test conditions demand effort
d) Is not correct. High quality systems demand more testing effort


---

### 問24：TM-2.6.1 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. That is one of the test progress monitoring metrics. All of them are test metrics but used for a different thing
b) Is not correct. Refers to dangerous use of that metric
c) Is not correct. Is really monitoring progress of test analysis
d) Is not correct. Is a metric to monitor progress of planning and control


---

### 問25：TM-2.6.2 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. Combines wrong coverage to number of executed tests
b) Is correct. It mentions three of the five main dimensions of test progress metrics
c) Is not correct. Includes people category, which is unlikely to be used for test progress monitoring; also, people and product are not listed in the five main dimensions of test progress metrics
d) Is not correct. Includes people category, which is unlikely to be used for test progress monitoring


---

### 問26：TM-2.6.3 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. Is all right, but no analysis involved, should not work on intuition only
b) Is not correct. Focuses wrongly on capabilities
c) Is correct. It combines using more different dimensions of test progress monitoring and starts looking into the probably real reason of test coverage versus effort spent leading to remaining product risks
d) Is not correct. Is all right on its own but it does not utilize the risk information


---

### 問27：TM-2.7.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct
b) Is correct. Training the BAs is a cost of prevention because it helps write higher-quality requirements; quality risk analysis is a detection cost because you would incur this cost even if you found no defects; any defect-related cost of quality incurred during testing and prior to release is a cost of internal failure, even avoidable costs; customer complaints are a cost of external failure because these customer complaints result in decreased future sales
c) Is not correct
d) Is not correct


---

### 問28：TM-2.7.2 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. You cannot add averages to calculate a total, and besides you weren’t given the cost of prevention
b) Is correct. $5,000 – ($150 + $250) = $4,600
c) Is not correct. Cost of quality can be used to calculate the value of any quality-related activity and is so used in industries around the world
d) Is not correct. You must subtract the average costs of detection and internal failure associated with testing to calculate the net potential savings, rather than adding those costs

---

### 問29：TM-2.8.1 (配点 1点)
#### 解答
d

#### 解説
a) Is not correct. There is no indication that any factor other than cost was used to select the outsource testing services firm
b) Is not correct. There is no clear division of work between the teams
c) Is not correct. The decision about the use of this offshore team was imposed top-down, corroding trust from the very start
d) Is correct. An onsite person will act as the channel of communication


---

### 問30：TM-2.9.1 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. From syllabus
b) Is not correct. Not a standard – does not provide guidance on test coverage criteria
c) Is not correct. A generic process improvement model – does not provide guidance on test coverage criteria
d) Is not correct. A generic project management framework – does not provide guidance on test coverage criteria


---

### 問31：TM-3.2.1 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. We are using the criteria to assess status and, based on that assessment, to decide future actions, which are actions that the syllabus says belong in a management review
b) Is not correct. While we are indeed checking against defined criteria, there is no independent evaluation of compliance (the checking is being done by the project team) and there is no indication that "evidence" is being checked
c) Is not correct. While the statement is in a sense true, it misses the element of decision-making by management peers, which is the key reason that this is a management review rather than an audit
d) Is not correct. While a pass/fail assessment of the criteria might well occur, as with B, there is no independent evaluation of compliance


---

### 問32：TM-3.3.1 (配点 3点)
#### 解答
c

#### 解説
a) Is not correct. Management wants a lightweight process, and because the requirements (and possibly the design) are already complete
b) Is not correct. Is not as good an answer as the correct one, because it specifically includes only test work products
c) Is correct. Informal reviews are a lightweight approach that will achieve the benefits
d) Is not correct. Reviews can be planned and managed by various participants on a project, including the test manager


---

### 問33：TM-3.3.1 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. Because of one or more mismatches
b) Is not correct. Because of one or more mismatches
c) Is not correct. Because of one or more mismatches
d) Is correct. Web development and understanding of cloud computing relate to the technical elements of the project. Attention to detail is a personality trait needed in any review participant. Having participated in reviews gives the individual knowledge of the review procedure. Financial applications manage balances, which is relevant to managing loyalty point balances


--- 
### 問34：TM-3.4.1 (配点 1点)
#### 解答
a,c

#### 解説
a) Is correct. Because with these you can calculate the total time spent in reviews and dynamic testing and the number of found defects in both, and then compare those numbers to dynamic testing numbers only
b) Is not correct. It is not relevant to efficiency calculations
c) Is correct. Because with these you can calculate the total time spent in reviews and dynamic testing and the number of found defects in both, and then compare those numbers to dynamic testing numbers only
d) Is not correct. As it is specifically mentioned in scenario, you might be drawn to this. Not relevant to count only severe defects though
e) Is not correct. As it is specifically mentioned in scenario, you might be drawn to this. Not relevant to think about status. You want test hours

--- 
### 問35：TM-3.5.1 (配点 1点)
#### 解答
a

#### 解説
a) Is correct. Root cause of the defects must be found
b) Is not correct. All stakeholders must agree on the review objectives
c) Is not correct. “punishment” does not help, be constructive!
d) Is not correct. Accuses does not help, be constructive!


--- 
### 問36：TM-4.2.1 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. No point retesting immediately after testing. NEW is often synonymous with OPEN. If state Z was blocked, then you cannot exit this state
b) Is correct. Both initial triage and assignment may decide to reject a defect (hence transition to REJECTED). If testing finds defect not fixed, then it will move to REOPENED. Both initial triage and assignment may decide that a defect may be deferred (perhaps to a later release)
c) Is not correct. A duplicate defect would not require re-assignment. Unconfirmed as state Y does not work as you cannot leave this state. State Z could be terminated in some schemes
d) Is not correct. Verified and tested are often synonymous – so both not needed. Review as state Y does not work as you cannot leave this state. State Z as fixed does not work – fixed is synonymous with resolved and you cannot get from state Z to ‘CLOSED’

--- 
### 問37：TM-4.2.2 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. It makes no sense to defer a defect that is already fixed
b) Is not correct. Confirmation test is not a terminal state
c) Is correct. It corresponds to a defect that turns out
d) Is not correct. A defect report can’t be in progress before it’s even reported

--- 
### 問38：TM-4.3.1 (配点 2点)
#### 解答
b,c

#### 解説
a) Is not correct. The third party already knows that these defect reports are coming from dynamic system testing
b) Is correct. These steps (and actual results) will help them understand the defect and the expected results will confirm that the testers understood what was expected
c) Is correct. The third party needs this information to aid their prioritization
d) Is not correct. Phase of detection is already available (system test), and phase of removal (hopefully now) is not known
e) Is not correct. It is not the testers’ responsibility to determine the location of the defect in the system

--- 

### 問39：TM-4.4.1 (配点 1点)
#### 解答
b 

#### 解説
a) Is not correct. The phase of introduction may be useful, but the detection and removal info are not useful for reducing defect introduction
b) Is correct. This will show where defects are currently introduced, and so we can target these activities to prevent future defect introduction
c) Is not correct. This is used for defect clustering information to target components that need extra testing – but does not directly help prevent defects
d) Is not correct. This tells us how efficient we are at removing defects – it does not help with reducing the introduction of defects

--- 
### 問40：TM-5.2.1 (配点 1点)
#### 解答
a,d

#### 解説
a) Is correct. Syllabus sect. 5.2
b) Is not correct. Contradicts syllabus
c) Is not correct. Contradicts syllabus
d) Is correct. Syllabus sect. 5.3
e) Is not correct. Wrong conclusion

--- 

### 問41：TM-5.3.1 (配点 3点)
#### 解答
a,c

#### 解説
a) Is correct. It is the fifth step of the IDEAL process
b) Is not correct. This is the first step of the IDEAL process and has already been carried out
c) Is correct. It is the third step of the IDEAL process
d) Is not correct. This is the second step of the IDEAL process and has already been carried out
e) Is not correct. It is not a given that your organization followed TMMi

--- 

### 問42：TM-5.4.1 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. Based on scenario-information it is unlikely you are this high
b) Is not correct. Based on scenario-information it is unlikely you are this low
c) Is correct. TMMi supports CMMi, which is your company’s choice
d) Is not correct. Is irrelevant detail

--- 

### 問43：TM-5.5.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. Improvement objectives not visible in matrix
b) Is correct. [TPI Next® book p. 50]
c) Is not correct
d) Is not correct

--- 

### 問44：TM-5.6.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. This would apply to TMMi
b) Is correct. CTP uses metrics to benchmark organizations against industry averages
c) Is not correct. This would apply to TPI-Next
d) Is not correct. The assessment is part of the scope of the CTP model, but it is not an objective (except maybe for the consultant doing it)

--- 

### 問45：TM-5.7.1 (配点 1点)
#### 解答
c

#### 解説
a) Is not correct. Is OK, but requirements are not mentioned in the scenario
b) Is not correct. Design problems not mentioned in scenario
c) Is correct. It fits ”test is behind schedule”
d) Is not correct. Is OK but already done, since defects are classified

--- 

### 問46：TM-6.2.1 (配点 1点)
#### 解答
d

#### 解説
a) Is not correct. This is a valid concern, as you need to adapt the tools and maybe give rights of your adaptations to open-source community, depending on licensing terms
b) Is not correct. This is a valid concern, as you need the telecom standard compliance
c) Is not correct. This is a valid concern, as you have your own specific purposes (which is why you originally had custom tools). Is the original purpose too far from what you need?
d) Is correct. Open-source tools can be modified, and you have the capabilities, having earlier built custom tools, so you should not care about adapting being hard

--- 

### 問47：TM-6.2.2 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. This answer would suggest using a ready-made tool, but standard compliance could be met with custom-built tools also, although maybe with more effort
b) Is correct. The company’s hardware business unit changes hardware often (every six months)
c) Is not correct. This is a prerequisite, but not a reason
d) Is not correct. Makes it attractive to keep the custom-made tool but does not justify the great time spent to use and maintain the tool and the stem does not mention ease-of-use

--- 

### 問48：TM-6.2.3 (配点 2点)
#### 解答
c,d

#### 解説
a) Is not correct. Not your major concern although good point to check in general
b) Is not correct. Not your major concern although good point to check in general
c) Is correct. You need to consider the possibility the tool is not enough to all your technical needs, even if it would be faster for some of them
d) Is correct. You need to think about your existing large number of tests, also a ROI concern
e) Is not correct. Not your major concern although good point to check in general

--- 

### 問49：TM-6.3.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. This activity is not necessary because the old tool will be retired
b) Is correct. This answer concerning retirement, as there are lots of existing scripts, and regression test scripts are the ones used most often
c) Is not correct. This activity is not necessary because the old tool will be retired
d) Is not correct. Even if you would like, it is not realistic to convert all the scripts, if you can manage with just regression test scripts

--- 

### 問50：TM-6.4.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. On its own does not tell anything, the tests could be all on same functional area. However, the measuring of test execution becomes easier with this
b) Is correct. This metric will tell you automatically if you cover enough of the requirements to make it to the release deadline and if you have too much coverage on some areas
c) Is not correct. Concern’s performance testing tools
d) Is not correct. This might help make collecting hours easier, but on its own does not help, time is mentioned as problem, so that might lead you to this option

--- 

### 問51：TM-7.2.1 (配点 2点)
#### 解答
b

#### 解説
a) Is not correct. Neither of these can write code, which is necessary to write the scripts
b) Is correct. Coding skills are necessary for the actual scripting and design skills are very useful to ensure good design of the keyword-driven framework
c) Is not correct. Neither of these can write code, which is necessary to write the scripts
d) Is not correct. Neither of these can write code, which is necessary to write the scripts

--- 

### 問52：TM-7.2.2 (配点 3点)
#### 解答
a,d

#### 解説
a) Is correct. We should look for ways to balance weaknesses with strengths when hiring
b) Is not correct. For all we know, some or all of the testers are already certified, and, in addition, we don't have any indication that the most critical skills weaknesses are in the area of testing
c) Is not correct. This is an extreme step, and we have no information that say the team is failing or seen to be failing
d) Is correct. We need to most urgently address the weaknesses that most affect effectiveness and efficiency
e) Is not correct. Creating weakness where you currently have strength is not a very desirable solution

--- 

### 問53：TM-7.3.1 (配点 1点)
#### 解答
a,b

#### 解説
a) Is correct. As we are getting two new team members, and timescales are short, we need to assimilate them into the team as quickly as possible
b) Is correct. If team members feel they are valued they are more likely to contribute more
c) Is not correct. Treating all team members the same and sharing all tasks across the team does not make best use of the disparate skills of the different team members
d) Is not correct. As the team leader, you have different responsibilities (and presumably skills) than the team members, so it is better use of your time to manage and them to test
e) Is not correct. It is better practice to provide more autonomy to the testers and allow them to manage their time more efficiently

--- 

### 問54：TM-7.4.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. System testing done solely by banking experts: who tests web services?
b) Is correct. Technical aspects covered by developers; functionality covered by internal testers and domain experts; internationalization covered by external experts
c) Is not correct. No component integration testing; no internationalization test knowledge
d) Is not correct. No internationalization test knowledge

--- 

### 問55：TM-7.5.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. This is motivating behavior from syllabus
b) Is correct. Aligning tester bonuses with delivered quality can be demotivating as the testers have an indirect impact on delivered quality – and in this scenario the deliverable is not meeting customer expectations, so is probably perceived to be of low quality
c) Is not correct. This is motivating behavior from syllabus
d) Is not correct. This is motivating behavior from syllabus

--- 

### 問56：TM-7.6.1 (配点 1点)
#### 解答
b

#### 解説
a) Is not correct. Upper management won’t want to see detailed defect reports
b) Is correct. Diplomacy and objectivity are important to build trust in the new outsourcing setting; reviews are constructive means to transfer knowledge of the internal team to the off-shore team
c) Is not correct. Upper management won’t want to be involved in the root cause investigation
d) Is not correct. Off-shore team alone won’t be effective to find the root causes

&nbsp;
