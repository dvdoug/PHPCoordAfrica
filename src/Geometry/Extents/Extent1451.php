<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Africa/Cote d'Ivoire (Ivory Coast) - west of 6°W.
 * @internal
 */
class Extent1451
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-6, 10.195178543138], [-6.0041670799254, 10.191248893738], [-6.0902786254882, 10.190832138062], [-6.111389160156, 10.197776794434], [-6.1455564498898, 10.21194267273], [-6.1883335113524, 10.231666564942], [-6.1971673965453, 10.236362457275], [-6.1800003051756, 10.364721298218], [-6.1802778244018, 10.40305519104], [-6.1816673278806, 10.434720993042], [-6.1830558776854, 10.463609695435], [-6.2125005722044, 10.569442749024], [-6.1890974044799, 10.636527061463], [-6.2244133949276, 10.722907066346], [-6.243402481079, 10.735256195069], [-6.4135422706603, 10.687985420227], [-6.4170837402342, 10.623123168946], [-6.3880558013914, 10.594130516052], [-6.4219098091123, 10.551665306092], [-6.533056259155, 10.576110839844], [-6.5893058776854, 10.609999656677], [-6.6018056869506, 10.637290000916], [-6.621597766876, 10.660902023316], [-6.6456003189085, 10.663992881775], [-6.6691670417785, 10.628193855286], [-6.6766672134398, 10.598331451416], [-6.6850004196165, 10.491664886475], [-6.6692366600035, 10.460692405701], [-6.6502780914306, 10.4527759552], [-6.6319446563718, 10.433609962464], [-6.6508336067198, 10.360971450806], [-6.6564073562622, 10.354066848755], [-6.7197227478025, 10.350555419922], [-6.9408335685728, 10.353748321534], [-6.9604868888853, 10.333540916443], [-6.9810423851013, 10.247845649719], [-6.9554171562193, 10.225831985474], [-6.9454174041746, 10.208193778992], [-6.9483337402341, 10.177498817444], [-6.9686117172239, 10.1559715271], [-6.988056182861, 10.147499084473], [-7.0194449424741, 10.142151832581], [-7.0395836830138, 10.156249046326], [-7.0613198280333, 10.189859390259], [-7.0786113739012, 10.203332901001], [-7.1280560493468, 10.223054885864], [-7.1838893890379, 10.236665725708], [-7.2697229385375, 10.254444122315], [-7.3481950759887, 10.327081680298], [-7.3597230911253, 10.350831985474], [-7.4516668319701, 10.397220611572], [-7.6379861831662, 10.446665763855], [-7.703194618225, 10.403331756592], [-7.7319450378417, 10.377222061158], [-7.7547225952148, 10.33083152771], [-7.7566003799437, 10.296105384827], [-7.7877779006956, 10.245277404785], [-7.826458454132, 10.202360153198], [-7.8891668319702, 10.173887252808], [-7.9394445419309, 10.157082557678], [-7.9637503623961, 10.159860610962], [-7.9739837646484, 10.16561126709], [-8.0050001144408, 10.105693817139], [-8.0191669464109, 10.089166641236], [-8.0419454574584, 10.073331832886], [-8.065556526184, 10.061944007874], [-8.1010427474973, 10.053609848023], [-8.1476402282714, 9.9838876724243], [-8.1581954956053, 9.9275684356692], [-8.1300010681152, 9.8861103057862], [-8.104166984558, 9.8641662597659], [-8.1042375564572, 9.814859390259], [-8.1111793518065, 9.8090019226076], [-8.1147232055662, 9.8055543899539], [-8.1475009918212, 9.6205539703371], [-8.1452789306638, 9.5572204589844], [-8.1436119079588, 9.5338878631596], [-8.1319446563719, 9.4969444274903], [-8.109167098999, 9.4641666412356], [-8.0645179748534, 9.4188098907471], [-8.0558338165281, 9.4033327102663], [-8.0193061828611, 9.388053894043], [-7.961944580078, 9.3897209167482], [-7.8772230148314, 9.3515272140504], [-7.9172224998473, 9.2349987030032], [-7.9200000762938, 9.2040262222292], [-7.9031949043272, 9.1795816421511], [-7.7972230911253, 9.1258316040042], [-7.7361116409301, 9.0916652679446], [-7.7364892959594, 9.0724506378174], [-7.810556411743, 9.069166183472], [-7.8988895416257, 9.0188875198367], [-7.9141674041746, 9.0029153823854], [-7.9280562400817, 8.9720821380618], [-7.9366674423217, 8.933053970337], [-7.9568057060241, 8.8261098861695], [-7.9562501907345, 8.8044433593753], [-7.940764427185, 8.7801370620729], [-7.9105563163757, 8.7672214508059], [-7.8838896751403, 8.7754163742067], [-7.7923617362974, 8.755554199219], [-7.7508339881896, 8.7176380157475], [-7.6734724044798, 8.61527633667], [-7.6752786636351, 8.5474987030032], [-7.6748614311217, 8.4376382827761], [-7.6655559539794, 8.4158325195312], [-7.6533703804016, 8.3838386535648], [-7.697778701782, 8.3708324432374], [-7.7489237785337, 8.3827772140503], [-7.7608337402343, 8.4156932830813], [-7.7841672897338, 8.4545822143555], [-7.8170838356016, 8.486110687256], [-7.9488897323606, 8.5016651153568], [-8.1884040832518, 8.4991655349734], [-8.2410182952878, 8.4465484619143], [-8.2347240447995, 8.3149986267093], [-8.2319450378417, 8.2744426727297], [-8.228889465332, 8.2402763366703], [-8.1747226715087, 8.1977767944339], [-8.1100006103513, 8.1744441986086], [-8.0630559921262, 8.16374874115], [-8.0205574035643, 8.1797218322757], [-7.9994449615477, 8.1538887023926], [-7.951250553131, 8.0362491607667], [-7.9468383789061, 8.0185050964357], [-8.0188903808593, 8.0302772521977], [-8.0533905029295, 8.0328197479249], [-8.0504169464111, 8.018888473511], [-8.0559730529783, 7.9766659736636], [-8.0766677856444, 7.9491662979128], [-8.1190280914306, 7.8647909164433], [-8.1114587783811, 7.8411798477175], [-8.0804271697996, 7.8054027557376], [-8.0944461822508, 7.7824993133548], [-8.1844453811644, 7.6215271949769], [-8.1868066787719, 7.6009716987612], [-8.1864595413206, 7.5730547904969], [-8.2187499999997, 7.5449991226199], [-8.2855567932127, 7.5824995040896], [-8.3981952667235, 7.6181941032411], [-8.4202785491941, 7.6047220230103], [-8.4697494506835, 7.5613250732425], [-8.4361152648922, 7.5314278602601], [-8.4158344268797, 7.4963884353641], [-8.4097223281857, 7.453540802002], [-8.4100017547606, 7.4202775955202], [-8.4030570983884, 7.3772220611575], [-8.3919448852537, 7.3152770996097], [-8.3505573272703, 7.2294435501101], [-8.3233337402341, 7.2030553817751], [-8.2866678237914, 7.1784715652468], [-8.2905559539794, 7.0227775573732], [-8.3088903427123, 6.8580551147464], [-8.327501296997, 6.8105554580691], [-8.3397235870358, 6.7844438552859], [-8.3641672134397, 6.739444255829], [-8.3786125183104, 6.7155551910402], [-8.418056488037, 6.6672220230105], [-8.4350700378416, 6.6524162292483], [-8.4468116760253, 6.6561264991764], [-8.457778930664, 6.6364579200746], [-8.4828824996947, 6.6202073097232], [-8.5043411254881, 6.6053462028505], [-8.5284729003904, 6.59586763382], [-8.5401401519773, 6.5619435310365], [-8.5670146942138, 6.5521173477174], [-8.5784034729, 6.529304981232], [-8.6029176712034, 6.5229854583743], [-8.6063842773435, 6.5078153610232], [-8.5440979003904, 6.4921522140503], [-8.4752788543701, 6.4358329772952], [-8.3744449615477, 6.3605546951296], [-8.1697235107421, 6.2749996185305], [-8.1436119079588, 6.2755546569827], [-8.1222229003905, 6.2777776718142], [-8.0675010681151, 6.293610572815], [-7.9994449615477, 6.3005552291871], [-7.8977785110472, 6.261943817139], [-7.8758335113524, 6.2452774047854], [-7.8256950378416, 6.2061104774477], [-7.7891674041745, 6.0705547332764], [-7.7797226905822, 6.0143046379091], [-7.7834725379942, 5.9780550003053], [-7.7576389312744, 5.9466657638554], [-7.687569618225, 5.9107632637024], [-7.6550006866453, 5.9380550384524], [-7.5636119842528, 5.8830547332766], [-7.4980564117431, 5.8433332443238], [-7.4478473663327, 5.8600687980652], [-7.4256949424743, 5.8455553054811], [-7.4277782440183, 5.8113880157472], [-7.4330558776855, 5.7894439697266], [-7.4361114501953, 5.7436103820802], [-7.4316673278807, 5.7149991989137], [-7.4055557250975, 5.6463880538944], [-7.399766921997, 5.6314277648928], [-7.3725004196165, 5.569443702698], [-7.3913888931271, 5.5408325195314], [-7.4163894653318, 5.4858331680298], [-7.4363889694212, 5.4338884353639], [-7.4259724617002, 5.3959717750553], [-7.3841843605041, 5.3683848381043], [-7.3684029579161, 5.3256936073305], [-7.503680706024, 5.0954160690312], [-7.5605564117431, 5.0513887405396], [-7.5883340835571, 4.905833244324], [-7.5908336639404, 4.8219442367555], [-7.5874252319334, 4.8108205795289], [-7.5613889694213, 4.7815270423891], [-7.5577783584592, 4.7441663742068], [-7.5511112213134, 4.6059718132022], [-7.5544452667235, 4.5372219085694], [-7.5600004196166, 4.4544439315798], [-7.5560421943665, 4.3780894279481], [-7.5254020690917, 4.3528060913087], [-7.5345005069996, 4.3441371200005], [-7.5380095069999, 4.3248681200003], [-7.5404403712031, 4.3057066618518], [-7.5362103155068, 4.3048040439874], [-7.5255741033173, 4.3023359465819], [-7.5085473878101, 4.2992009479317], [-7.5042115441249, 4.2985319992038], [-7.4745271288203, 4.2958579999771], [-7.4708557205132, 4.2956916735182], [-7.467584640135, 4.2957681472329], [-7.4639911183746, 4.2960962116466], [-7.430334738424, 4.3005801607036], [-7.427758899081, 4.3009904184682], [-7.4245568825322, 4.3016909127015], [-7.4214055074639, 4.3025946866765], [-7.4183182676364, 4.3036978756539], [-7.4149535160785, 4.3051657688549], [-7.3953020041923, 4.3147967363199], [-7.3913801031709, 4.3170400398026], [-7.388677987237, 4.3188854880553], [-7.3861022608976, 4.3208986832152], [-7.3834161955683, 4.3233097235779], [-7.3495078824692, 4.3564257058978], [-7.2735549235765, 4.4118723225985], [-7.181854090697, 4.4663136283491], [-7.1321923534501, 4.4686331724659], [-7.1286237313304, 4.4689328727669], [-7.1250672459994, 4.4694867995604], [-7.0623908778138, 4.48190348826], [-7.0598209310712, 4.4824815587326], [-7.0566685332079, 4.4833843810363], [-7.0526485303648, 4.4848747981509], [-7.0176784670721, 4.5002369941778], [-7.0141842166417, 4.5019842959421], [-7.0113664145525, 4.5036539304757], [-7.0081493092313, 4.5058853177038], [-6.8920492012266, 4.5953524528402], [-6.888836049265, 4.5981464615919], [-6.8865449780036, 4.6004696526948], [-6.8844117086014, 4.6029329920223], [-6.8817419540319, 4.6065742362987], [-6.8752340114137, 4.616765166676], [-6.8582432909068, 4.62269391489], [-6.8178279794154, 4.6312578498613], [-6.786441150976, 4.6350314626526], [-6.7475313945899, 4.6346407347999], [-6.7442516745081, 4.6347136083037], [-6.7409875492034, 4.6349964817484], [-6.7372075845867, 4.6355935683147], [-6.6986624350664, 4.6435840807146], [-6.6938838677326, 4.6449168987706], [-6.6017851662991, 4.6768467532381], [-6.5977904987839, 4.6785062170933], [-6.5948687800225, 4.6799921758627], [-6.592049893881, 4.6816613790746], [-6.5893328596319, 4.6835162271799], [-6.5695910453846, 4.697959487364], [-6.5670396315421, 4.6999539417925], [-6.5637219368016, 4.7030031089916], [-6.5496430565879, 4.717719173224], [-6.5367780311091, 4.723548006945], [-6.39082750271, 4.777068338654], [-6.3029319656547, 4.8034526031758], [-6.2577526400028, 4.8162824417], [-6.2380360856377, 4.8207113890932], [-6.2011175349727, 4.8307189367088], [-6.1969127248822, 4.8321479786487], [-6.1940175654988, 4.833388193121], [-6.0557650490218, 4.8977069302053], [-6.052782781405, 4.8992193927516], [-6.0499623789883, 4.9008878675053], [-6.0472569051061, 4.9027327569544], [-6.0441687413999, 4.9051823656695], [-6.0312948647281, 4.9164975420848], [-6, 4.92872051238], [-6, 5.0000000000001], [-6, 5.1666666666667], [-6, 5.3333333333334], [-6, 5.5000000000001], [-6, 5.6666666666668], [-6, 5.8333333333335], [-6, 6.0000000000001], [-6, 6.1666666666667], [-6, 6.3333333333334], [-6, 6.5000000000001], [-6, 6.6666666666668], [-6, 6.8333333333335], [-6, 7.0000000000001], [-6, 7.1666666666667], [-6, 7.3333333333334], [-6, 7.5000000000001], [-6, 7.6666666666668], [-6, 7.8333333333334], [-6, 8.0000000000001], [-6, 8.1666666666667], [-6, 8.3333333333334], [-6, 8.5000000000001], [-6, 8.6666666666668], [-6, 8.8333333333334], [-6, 9.0000000000001], [-6, 9.1666666666667], [-6, 9.3333333333334], [-6, 9.5000000000001], [-6, 9.6666666666668], [-6, 9.8333333333334], [-6, 10], [-6, 10.195178543138],
                ],
            ],
        ];
    }
}
