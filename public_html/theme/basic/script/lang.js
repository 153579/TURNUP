var local = localStorage.getItem("local");

if(local == null) {
    local = "en-US";
}


if(local === "ko-KR"){
    localStorage.setItem("local", "ko-KR");
}

$(".alert").click(function () {
    if(local === "ko-KR"){
        alert("준비중입니다.")
    }

    if(local === "en-US"){
        alert("In ready.")
    }
})

$.i18n.init({
    //lng: 'en-US',
    //lng: 'ko-KR',
    lng: local,
    debug: true,
    useLocalStorage: true,
    localStorageExpirationTime: 86400000, // in ms, default 1 week
    resStore: {
        "en-US": {
            "INDEX": {
                "1":"TURNUP aims to seek maximum compensation while protecting the user's investment as much as possible with a system that organizes and recommends portfolios with products optimized for the user's needs.",         
                "2":"TURNUP is preparing more diverse content.",         
                "3":"PROBIT Exchange Listed Guidance",                  
                "4":"TURNUP will be listed on the PROBIT Korea Exchange on December 17th.",                  
                "5":"Since the huge rise in the past, the entire market has been on the decline for more than two years. Nevertheless, the block chain industry is evolving into new ideas and innovations.",          
         
                "6":"Decentralized Financial Services Utilizing Open Source Software",
                "7":"ICOs Proceeding with Smart Contracts",         
                "8":"Towards an economic system that anyone can participate in",         
                "9":"DeFi was created to solve this problem and works based on decentralization and trust. Although there are still many improvements to be made in terms of performance, it has many advantages based on decentralization.",         
                "10":"DeFi Promises and Challenges",         
                "11":"State of DeFi",         
                "12":"TURNUP end DeFi",       
                "13":"Financial services today offer important services, but despite the high cost of developing many pin technologies, the following fundamental challenges persist",       
                "14":"High transaction costs. Due to regulatory requirements, legacy systems with complex interoperability issues, and control of large institutions, transaction fees are high for average users of banking and financial services. Services that require brokers are much more expensive because agents and other types of brokers are involved.",       
                "15":"A slow transaction, especially for international transactions. Theoretically, it only takes a few minutes for computers to do business, but transferring money from one agency to another can take hours within one country and days between countries.",       
                "16":"Despite the law to reduce money laundering and related crimes, there is little evidence that the current system or AML actually reduces money laundering.",       
                "17":"That's why many investors are starting to move some of their investments into crypto money. Cryptocurrency, by definition, has full transparency that existing systems cannot provide. In addition, the amount of administrative and bureaucratic required is minimized.",       
                "18":"The current state of DeFi is filled with a general-purpose block chain, most of which provide a complete set of Turing commands for smart contract development. While suitable for many programming languages, the dogmatic pursuit of the Turing Fully Smart Contract Language has created a number of issues with the scalability, security and robustness of the block chain.",       
                "19":"Huge amounts of dApps in networks such as Ethereum, EOS, and TRON have potential (or proven) effects on other dApps in the network.",      
                "20":"For serious financial types of dApp, it is important to know that the network is maintained and managed in a responsible and secure manner. Having a block chain filled with games, gambling, and other less 'mission-critical' apps will ultimately affect the development and direction of the block chain.",      
                "21":"To use the Turning-complete command set, programmers must create complex programs to develop all kinds of apps.",      
                "22":"Due to the limitations of the general-purpose block chain for DeFi apps, there is a market opportunity to provide services to this market. While the crypto-currency momentum continues to rise, most applications are still at Ethereum. Network concerns have already led some major projects to consider alternative or additional block chain porting or operations.",      
                "23":"Since late 2018, hundreds of DeFi services have increased worldwide, and are being used in various fields such as landing, staging, decentralization, derivatives, wallets, identification, forecasting market, and insurance. Although there have not been many areas where various dApps have been introduced to the market by various companies so far, DeFi has been receiving a lot of favorable responses from the block chain industry by improving the fundamental inefficiency of the financial service system, and has grown rapidly in a short period of time due to the large influx of users who understand the block chain.",
                "24":"TURNUP has decided to upgrade its existing DeFi system and as the first platform, it has the ability to generate interest deposits and profits similar to traditional banking services. Through this service, users can deposit their crypto-currency assets in a relatively safe manner and earn profits, and it is an efficient DeFi financial instrument that can be used by anyone in the world.",
                "25":"In the past, users who want to use financial services platforms have made repeated comparisons by considering various factors such as brand awareness, rate of return change and security. In addition, most rational users wanted to reduce risk by keeping them on multiple platforms at the same time.",
                "26":"The TURNUP platform helps users recommend intelligent portfolios and builds a true intelligent investment advisory and management platform in the DePi area.",
                "27":"The TURNUP platform provides users with a choice of a period of optimal interest rate according to their convenience.",
                "28":"USD PLETFORM will pay the return on a daily basis if TURNUP converted into USD is attracted to the user's investment principal for a certain period of time, and will pay TURNUP on the USD basis at the end of the deposit period, regardless of the price of TURNUP, it will pay everything on USD basis.",
                "29":"You can find out more about TURNUP DeFi SYSTEM in the white paper.",
                "30":"Decentrality",
                "31":"Decentralization also plays an important role in safety, which can be safe from the risk of hacking or system shutdown because the system is operated by nodes around the world, not by the tether base of the central entity.",
                "32":"unlicensed nature",
                "33":"Unauthorizedness refers to an environment in which anyone can participate in the financial services system. The current financial services system is very closed and requires specific qualifications to subscribe to some financial instruments. Around 1.7 billion adult men and women worldwide are said to have no bank accounts. It accounts for about 20 percent of the world's population.",
                "34":"transparency and censor resistance",
                "35":"In the DeFi system, all transactions are made public and stored on the block chain, but it is impossible to know whose transactions are. Transparency in transactions is guaranteed and not operated by a particular user, but by the user, it is possible to ensure complete ownership of an individual's assets.",
                "36":"Efficiency",
                "37":"In the current financial sector, fees for cross-border remittances charge about 5 percent or more, but in the DeFi system, lower fees of less than 1 to 2 percent are set. In terms of transmission speed, the DeFi system also has excellent efficiency. For example, cross-border remittances through banks take one to two days, but in normal cases, all transactions are terminated within 10 minutes. Financial services can be freely and easily provided anytime, anywhere.",
                "38":"Personal Information Protection",
                "39":"The DeFi system allows users to selectively disclose the level of personal information they want to the other party. Today, the level of personal information has gone beyond the question of simple privacy. The global data market has grown to about 250 trillion won, and the commercialization of personal information is expected to accelerate steadily.",
                "40":"DeFi utilizes block chain technology to achieve economic capacity, allowing people to manage their own money directly. Thus DeFi is the first service in history that is provided by protocols, not centralized institutions, and that users and communities of such services participate directly in operation.",
                "41":"DeFi, which is only a few years old, is still small, but it has been growing exponentially since last June and will evolve faster with what has been available in the existing financial industry.",      
                "42":"Despite many concerns over the collapse of the DeFi bubble, it is noteworthy that high expectations for DeFi are maintained around the world, which is interpreted as an indication of the need for fundamental changes in existing services.",      
                "43":"Today we are looking at the beginning stage of the rapidly growing DeFi industry bubble. Among the DeFi tokens, there are tokens that have already surpassed the value of Bitcoin. Every day a superior DeFi project emerges, and one day the DeFi may be larger than the size of the Internet. The world's 1.7 billion people have yet to use traditional financial services. Defies can provide them with financial services.",      
                "44":"DeFies may be a bubble, but they're in the midst of the biggest 'redistribution of wealth' trend in human history, and they can solve the financial inclusion problem of financial inclusion.",      
                "45":"The TURNUP team will use the funds raised for the platform development and maintenance, production, development and design team's labor costs.",     
                "46":"The success or failure of the platform is not only accomplished by successful platform development but also by the best platform operation. The TURNUP team will be used for the operation team and the service team for smooth and pleasant operation. We will do our best to expedite the platform's interest payments.",     
                "47":"TURNUP will be used for public relations, marketing and partnership activities with partner foundations and companies to promote global awareness.",     
                "48":"To run the TURNUP Foundation ethically, it requires compliance with laws, duties of tax collection, and a clear disclosure of the company's management situation. Therefore, TURNUP will use legal, tax and accounting services as administrative expenses.",     
                "49":"What is DeFi?",     
                "50":"DeFi means decentralized financing. Although financial services do not require a trusted third party, use the block chain to explain the idea that people and machines will become their own banks for these services in the future, eliminating the risks of trading partners.",
                "51":"What DeFi services do you have?",
                "52":"All services provided by banks can be distributed. The first and most common service is to issue money. Bitcoins are a typical example. There are many other things, such as agreement verification, such as mining and Stay King, loans, exchanges, investments, etc.",
                "53":"Why don't I use the bitcoin block chain?",
                "54":"The bitcoin block chain was created for one specific financial service. It will be a distributed, censored value repository used as an exchange medium and a unit of account for the future. Better than other block chains. Beyond that, however, the infrastructure of other DeFi services lacks the necessary technical capabilities.",     
            },
        },
        "ko-KR": {
            "INDEX": {
                "1":"TURNUP는 사용자의 니즈에 최적화된 상품으로 포트폴리오를 구성, 추천하는 시스템으로 사용자의 투자금을 최대한 보호하면서 최대한의 보상을 추구하는것을 목표로 합니다.",         
                "2":"TURNUP이 더 다양한 내용을 준비하고 있습니다.",         
                "3":"PROBIT 거래소 상장 안내",                  
                "4":"12/17일 TURNUP이 PROBIT korea 거래소에 상장합니다.",                  
                "5":"지난 암호화폐의 거대 상승 이후, 전체 암호화폐 시장은 2년이 넘는 하락장을 맞이하고 있다. 그럼에도 불구하고 블록체인 업계는 새로운 아이디어와 기술혁신으로 진화 하고 있다.",          
         
                "6":"오픈소스 소프트웨어를 활용한 탈중앙화 금융 서비스",
                "7":"스마트 컨트랙트를 사용하여 진행하는 ICO",         
                "8":"누구나 참여 가능한 경제 시스템을 지향",         
                "9":"디파이는 이를 해결하기 위해서 탄생하였고 탈중앙성과 신뢰를 바탕으로 작동합니다. 아직 성능적인 부분에선 개선해야 할 부분이 많지만, 탈중앙성을 바탕으로 한 다양한 장점을 갖고 있습니다.",         
                "10":"DeFi의 약속과 도전",         
                "11":"DeFi의 상태",         
                "12":"TURNUP과 DeFi",      
                "13":"오늘날 금융 서비스는 중요한 서비스를 제공하고 있지만 매우 높은 비용으로 많은 핀 테크 개발에도 불구하고 다음과 같은 근본적인 문제가 지속됩니다.",      
                "14":"높은 거래 비용. 규제 요구 사항, 복잡한 상호 운용성 문제가있는 레거시 시스템 및 대규모 기관의 제어로 인해 은행 및 금융 서비스의 평균 사용자에게는 거래 수수료가 높습니다. 중개인이 필요한 서비스는 에이전트 및 기타 유형의 중개인이 관여하기 때문에 훨씬 더 비쌉니다.",      
                "15":"특히 국제 거래의 경우 느린 거래. 이론적으로는 컴퓨터가 거래하는 데 몇 분 밖에 걸리지 않지만 한 기관에서 다른 기관으로 돈을 옮기는 데는 한 국가 내에서 몇 시간이 걸리고 국가 간에는 며칠이 걸릴 수 있습니다.",      
                "16":"자금 세탁 및 관련 범죄를 줄이기위한 법률에도 불구하고 현재 시스템이나 AML이 실제로 자금 세탁을 줄인다는 증거는 거의 없습니다.",      
                "17":"이러한 이유로 많은 투자자들이 투자의 일부를 암호 화폐로 옮기기 시작했습니다. 암호 화폐는 정의상 기존 시스템이 제공 할 수없는 완전한 투명성을 가지고 있습니다. 또한 필요한 행정 및 관료의 양이 최소화됩니다.",      
                "18":"탈 중앙화 금융 (DeFi)의 현재 상태는 범용 블록 체인으로 채워지며, 대부분은 체인에서 스마트 계약 개발을위한 튜링 완전한 명령 세트를 제공합니다. 많은 프로그래밍 언어에 적합하지만, 튜링 완전 스마트 계약 언어에 대한 독단적 인 추구는 블록 체인의 확장 성, 보안 및 견고성에 관한 다양한 문제를 초래했습니다.",       
                "19":"Ethereum, EOS 및 TRON과 같은 네트워크에있는 엄청난 양의 dApp은 네트워크의 다른 dApp에 잠재적 (또는 입증 된) 영향을 미칩니다.",      
                "20":"심각한 금융 유형의 dApp의 경우 네트워크가 책임감 있고 안전한 방식으로 유지 및 관리되고 있음을 아는 것이 중요합니다. 게임, 도박 및 기타 덜 '미션 크리티컬' 앱으로 가득 찬 블록 체인을 갖는 것은 궁극적으로 블록 체인의 개발과 방향에 영향을 미칠 것입니다.",      
                "21":"Turing-complete 명령 세트를 사용하려면 프로그래머가 모든 종류의 앱을 개발하기 위해 복잡한 프로그램을 만들어야합니다.",      
                "22":"DeFi 앱용 범용 블록 체인의 한계로 인해이 시장에 서비스를 제공 할 수있는 시장 기회가 열렸습니다. 암호 화폐 모멘텀이 계속 상승하고 있지만 현재 대부분의 애플리케이션은 여전히 ​​이더 리움에 있습니다. 네트워크에 대한 우려로 인해 일부 주요 프로젝트는 이미 대체 또는 추가 블록 체인 포팅 또는 작업을 고려하게되었습니다.",      
                "23":"2018년 후반부터 전세계적으로 수백개의 디파이 서비스 들이 늘어나게 되었으며 랜딩, 스테이킹, 탈중앙화거래소, 파생상품, 지갑, 신원확인, 예측시장, 보험 등 다양한 분야에서 활용이 되어지고 있다. 이제까지 여러 기업에서 다양한 dApp들을 선보여 시장에 내놓았지만 실질적으로 적용이 가능한 분야는 많지 않았지만 디파이는 금융서비스 시스템의 근본적인 비효율성을 개선하여 블록체인 업계의 많은 호응을 얻게 되었고 블록체인을 이해하고 있는 사용자층이 대거 유입됨으로 단기간에 급성장하게 되었다.",
                "24":"TURNUP은 기존 디파이 시스템을 업그레이드 하기로 하고 첫번째 플랫폼으로 전통적인 은행서비스와 유사한 이자 예금 및 이익 창출이라는 기능이 있다. 이 서비스를 통하여 사용자는 암호화폐 자산을 상대적으로 안전하게 입금하고 수익을 얻을수 있으며 세계 누구라도 이용할수 있는 효율성 높은 디파이 금융상품이다.",
                "25":"과거 금융서비스 플랫폼을 이용하고자 하는 사용자는 브랜드의 인지도, 수익률 변경, 보안 등 여러가지 요소를 고려하여 반복적인 비교를 해왔다. 또한 대부분 이성적인 사용자는 동시에 여러 플랫폼에 암호화폐를 보관하여 리스크를 줄이고자 했다.",
                "26":"TURNUP 플랫폼은 사용자에게 지능적인 포트폴리오를 추천할수 있도록 도와주며 디파이영역에서 진정한 지능형 투자자문 및 관리 플랫폼을 구축한다.",
                "27":"TURNUP 플랫폼은 사용자의 편의에 맞추어 최적의 이율이 나오는 기간을 설정하여 선택할수 있도록 제공을 한다.",
                "28":"USD PLETFORM은 사용자 투자원금에 초첨을 맞추어 USD로 환산된 TURNUP를 일정 기간 유치하시면 수익률이 일별 계산되어 지급 되고 예치기간 종료시 예치하신 USD기준으로 TURNUP을 지급하여 드리는 방식으로 TURNUP의 가격과 상관없이 예치하신 USD 기준으로 모든것을 지급하여 준다.",
                "29":"TURNUP DeFi SYSTEM에 대한 다양한 내용을 백서에서 확인하실 수 있습니다.",
                "30":"탈중앙성",
                "31":"탈중앙성은 안전성에서도 중요하게 작용을 하는데 중앙 주체의 테이터 베이스가 아닌 세계 각국의 노드에 의해 시스템이 운영하기에 해킹이나 시스템 셧다운이라는 위험에서 안전할수 있다.",
                "32":"무허가성",
                "33":"금융서비스 시스템에 누구나 참여할수 있도록 하는 환경을 의미하는게 무허가성이라고 지칭 한다. 현 금융서비스 시스템은 매우 폐쇄적으로 일부 금융상품을 가입하기 위해서는 특정한 자격요건을 요구하는경우가 많다. 전 세계적으로 약 17억명의 성인 남녀가 은행계좌를 가지고 있지 않다고 한다. 이는 전세계 인구의 20% 정도를 차지하고 있다.",
                "34":"투명성 및 검열저항성",
                "35":"디파이 시스템에서는 모든 거래의 내역이 블록체인상에 공개가 되며 저장이 되지만 그 거래의 내역이 누구의 거래인지 알수가 없도록 되어있다. 거래의 투명성이 보장이 되며 특정한 사용자에 의해 운영이 되는것이 아니라 사용자 모두가 시스템을 이루고 있기 때문에 개인의 완전한 자산 소유권을 보장할수있다.",
                "36":"효율성",
                "37":"현 금융권에서 국가간 송금의 수수료는 약 5% 이상을 부과하지만 디파이 시스템에서는 1~2% 미만의 낮은 수수료가 책정이 된다. 전송 속도 측면에서도 디파이시스템은 탁월한 효율성을 가지고 있다. 예로 은행을 통한 국가간 송금은 1~2일 정도 소요가 되지만 디파이 시스템에서는 보통의 경우 10분 이내 모든 거래가 종료된다. 언제 어디서나 자유롭고 간편하게 금융서비스를 할 수가 있다.",
                "38":"개인정보보호",
                "39":"디파이 시스템에서는 원하는 수준의 개인정보를 원하는 상대방에게 선택적으로 공개할수 있도록 되어 있다. 오늘날 개인정보의 수준은 단순 프라이버시 차원에서 생각할 문제를 넘어섰다. 세계 데이터 시장은 약 250조원 규모로 성장을 했으며 개인정보의 상품화는 꾸준히 가속화 될것으로 보인다.",
                "40":"DeFi는 블록체인 기술을 활용해 경제적 역량 강화를 이루어내고, 이를 통해 사람들이 자신의 돈을 직접 관리할 수 있도록 한다. 따라서 DeFi는 중앙화된 기관이 아닌 프로토콜들이 제공하는 서비스, 그리고 해당 서비스 이용자와 커뮤니티가 운영에 직접적으로 참여하는 역사상 최초의 서비스",
                "41":"태어난 지 얼마 되지 않은 DeFi가 아직 규모는 작지만 지난 6월부터 폭발적인 성장세를 보이고 있고 기존 금융 산업에서 제공되던 것들이 활용되면서 앞으로 더 빠르게 진화할 것",      
                "42":"디파이 거품 붕괴에 대한 많은 우려에도 불구하고 전세계적으로 디파이에 대한 높은 기대감이 유지되고 있다는 점은 주목할만 하다며 이는 기존 금융서비스의 근본적 변화 필요성을 보여주고 있는 것으로 해석된다.",      
                "43":"오늘날 우리는 급성장하는 디파이 산업 거품의 시작 단계를 보고 있다. 디파이 토큰 중에서는 이미 비트코인의 가치를 뛰어넘은 토큰도 존재한다. 매일 우수한 디파이 프로젝트가 등장하고 있으며, 언젠가 디파이가 인터넷 규모보다 커질 수도 있다. 전세계 17억 인구는 아직 전통 금융 서비스를 사용하지 못하고 있다. 디파이는 이들에게 금융 서비스를 제공할 수 있다.",      
                "44":"디파이가 거품일 수는 있지만, 인류 역사상 가장 큰 '부의 재분배' 흐름의 한 가운데 있으며 금융포용(financial inclusion) 문제를 해결할 수 있다",      
                "45":"TURNUP팀은 모집한 자금의 플랫폼 개발 및 유지보수, 제작, 개발팀과 디자인팀의 인건비로 사용 예정이다.",     
                "46":"플랫폼의 성패는 성공적인 플랫폼 개발뿐만이 아닌 최상의 플랫폼 운영으로 완성이 된다. TURNUP팀은 원활하고 쾌적한 운영을 위하여 운영팀과 서비스팀을 위해 사용할 예정이다. 플랫폼의 이율 지급이 신속히 처리되도록 최선을 다할 것이다.",     
                "47":"TURNUP을 전세계적으로 알리기 위한 홍보, 마케팅 그리고 파트너 재단 및 회사와의 제휴 활동을 위하여 사용할 예정이다.",     
                "48":" TURNUP 재단을 윤리적으로 운영하기 위해서는 법률의 준수, 잡세의 의무, 회사 경영상황의 토명한 공개를 필요로 한다. 이에 TURNUP은 법무, 세무, 회계등의 업무를 행정비용으로 책정하여 사용할 예정이다.",     
                "49":"DeFi 란 무엇입니까?",     
                "50":"DeFi는 탈 중앙화 금융을 의미합니다. 금융 서비스를 실행하기 위해 신뢰할 수있는 제 3자가 필요하지 않지만, 블록 체인을 사용하여 사람과 미래에는 기계가 이러한 서비스를위한 자체 은행이되어 거래 상대방의 위험을 제거한다는 아이디어를 설명합니다.",
                "51":"어떤 DeFi 서비스가 있습니까?",
                "52":"은행에서 제공하는 모든 서비스는 분산 될 수 있습니다. 첫 번째이자 가장 일반적인 서비스는 돈을 발행하는 것입니다. 비트 코인이 그 대표적인 예입니다. 합의 검증, 즉 채굴 및 스테이 킹, 대출, 교환, 투자 등과 같은 다른 많은 것들이 있습니다.",
                "53":"비트 코인 블록 체인을 사용하지 않는 이유는 무엇입니까?",
                "54":"비트 코인 블록 체인은 하나의 특정 금융 서비스를 위해 만들어졌습니다. 즉, 교환 매체로 사용되는 분산되고 검열에 저항하는 가치 저장소이자 미래의 계정 단위 일 것입니다. 다른 블록 체인보다 더 잘합니다. 그러나 그 이상으로 다른 DeFi 서비스의 인프라에 필요한 기술 기능이 부족합니다.",
            },
        }
    }
}, function () {
    $('body').i18n();
});

var changeLang = function (lang) {
    $.i18n.setLng(lang);
    $('body').i18n();
    
}



$(document).ready(function(){
    click();
})

function click(){
    $(".koo").click(function(){
        localStorage.setItem("local", "ko-KR");
    })
    $(".us").click(function(){
        localStorage.setItem("local", "en-US");
    })
}
