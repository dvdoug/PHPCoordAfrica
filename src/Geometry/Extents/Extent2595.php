<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Africa/Egypt - Western Desert.
 * @internal
 */
class Extent2595
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [29.250752277845, 30.975062817445], [29.239967009138, 30.972927353336], [29.220136144509, 30.971050439316], [29.173632074539, 30.971298079685], [29.147753119574, 30.973178227736], [29.103357076442, 30.98560248942], [29.026371076155, 31.016360955518], [28.974886732909, 31.052038174649], [28.96825928796, 31.066875661245], [28.967045311385, 31.06938144756], [28.965404924069, 31.072257567452], [28.96354886232, 31.075028595877], [28.961485061514, 31.077682662971], [28.959222348765, 31.080208398997], [28.956770405312, 31.082594983113], [28.954139725193, 31.084832189797], [28.951341570411, 31.086910432738], [28.948387922755, 31.088820805985], [28.945291432501, 31.090555122204], [28.942659979272, 31.09183837861], [28.882560672614, 31.119273079877], [28.878461821172, 31.120932960179], [28.841047688701, 31.134158516581], [28.837831753962, 31.135190496461], [28.680913440817, 31.178979504207], [28.552675989042, 31.224926641461], [28.549826250192, 31.225867747517], [28.546289780801, 31.226826199151], [28.543413602934, 31.227444372618], [28.516793670555, 31.232514888599], [28.512764590842, 31.23312652868], [28.509061367225, 31.2334598361], [28.50533417413, 31.233580823429], [28.501598991564, 31.233488968889], [28.497871834281, 31.233184662918], [28.494168682855, 31.232669206552], [28.491000115944, 31.23205536798], [28.449311206895, 31.222902560769], [28.374288050647, 31.218666307644], [28.293937072578, 31.222336893451], [28.051090453336, 31.245408998919], [28.04892490566, 31.252398117472], [28.039376475245, 31.293357880556], [28.037953636859, 31.297923429669], [28.018341965612, 31.348058123831], [28.016532453142, 31.351907843402], [28.014867934723, 31.354780454194], [28.012987976665, 31.357546979374], [28.010900616917, 31.360195568176], [28.008614783779, 31.362714874168], [28.006140257851, 31.365094103919], [28.003487630276, 31.367323063315], [28.000486044043, 31.369515973599], [27.979884012905, 31.383388233512], [27.977273880341, 31.385040969516], [27.974157319306, 31.386764378613], [27.970912181717, 31.388303552665], [27.967552371711, 31.389651893858], [27.964092286864, 31.390803621717], [27.960546756354, 31.391753797966], [27.956930977254, 31.392498347794], [27.953260449196, 31.393034077398], [27.949550907727, 31.393358687761], [27.94581825662, 31.393470784576], [27.942078499444, 31.393369884296], [27.938347670696, 31.393056416258], [27.934641766792, 31.392531720899], [27.930976677217, 31.391798044041], [27.927368116135, 31.390858527296], [27.923831554762, 31.389717194614], [27.920382154792, 31.388378935035], [27.917034703174, 31.386849481728], [27.913803548511, 31.385135387395], [27.909841462052, 31.382660515449], [27.874262483201, 31.357637606906], [27.753700704082, 31.32432532192], [27.686520413463, 31.336882449872], [27.576896116866, 31.364832402907], [27.563193137196, 31.368640920426], [27.547002964181, 31.376736917201], [27.538830710998, 31.383302054095], [27.529119545573, 31.395224520139], [27.523237116134, 31.410512297743], [27.514777869075, 31.441674203426], [27.513971876384, 31.444286433403], [27.500134633112, 31.484602197425], [27.498797263749, 31.487963307624], [27.497341891374, 31.49092814988], [27.495664077264, 31.493798656251], [27.493770991854, 31.496562531352], [27.49167072945, 31.499207935668], [27.489372273784, 31.501723536321], [27.48688545971, 31.504098555686], [27.484220931219, 31.506322817629], [27.481390095947, 31.508386791192], [27.478405076365, 31.51028163151], [27.47527865786, 31.511999217801], [27.472024233937, 31.513532188255], [27.467656560683, 31.515217822414], [27.443688980002, 31.523011299862], [27.439400783209, 31.524182487633], [27.435778033075, 31.524919264935], [27.432101309039, 31.525446978289], [27.427444782768, 31.525809627291], [27.384098993712, 31.527621837846], [27.381303302986, 31.527678717658], [27.376714360585, 31.527508655337], [27.348676002562, 31.525169678454], [27.074446040875, 31.528766728705], [26.976919033688, 31.547695620109], [26.808092776061, 31.582246966652], [26.690048432464, 31.608785485459], [26.687532516862, 31.609297020913], [26.557408756278, 31.632984182099], [26.553121666063, 31.633590479339], [26.412922787777, 31.64803558873], [26.284230936002, 31.662733741044], [26.265876893898, 31.666217144923], [26.226039226216, 31.675456587501], [26.093550487146, 31.710142237469], [26.01567648343, 31.737631979366], [26.012388154375, 31.738688825592], [26.008797633742, 31.739618126166], [25.924301296621, 31.758795706332], [25.920389353104, 31.759553819751], [25.897007707193, 31.763217770264], [25.893512850404, 31.763666090127], [25.854720644272, 31.767322745981], [25.851343622056, 31.767550153808], [25.784674291408, 31.769803765012], [25.781993805941, 31.769839085019], [25.777593379986, 31.769657179474], [25.742655427184, 31.766702701651], [25.738187864497, 31.766099698385], [25.70099763914, 31.759677264028], [25.696420791885, 31.758696828357], [25.569022450034, 31.725185832418], [25.566633930608, 31.724507093675], [25.450474529063, 31.688728154002], [25.367263018595, 31.666727905816], [25.294666975048, 31.651516810573], [25.224551913503, 31.651349153526], [25.123616273696, 31.679588307136], [25.108918620392, 31.741677600289], [25.108983915128, 31.744290750733], [25.108989310019, 31.747546614195], [25.108898026866, 31.750261858441], [25.108640533815, 31.754053828457], [25.108286152095, 31.757276747645], [25.107882163938, 31.760455969615], [25.106104444138, 31.763544698292], [25.104820433428, 31.766585484369], [25.102714492112, 31.770600401384], [25.061288523038, 31.748559144975], [25.051664733887, 31.746942138672], [25.048052215576, 31.746110534668], [25.029718780518, 31.734441375733], [25.000275039673, 31.711387252808], [24.973192596436, 31.685693359375], [24.960831069947, 31.667499160767], [24.947637939454, 31.622636413574], [24.909162902832, 31.581109619141], [24.862776184082, 31.545274353028], [24.793610000611, 31.502774810791], [24.76812210083, 31.470830535889], [24.769165420532, 31.259164428711], [24.804441833496, 31.134442901612], [24.81166305542, 31.114999389649], [24.877010726929, 30.972150421143], [24.895552062989, 30.938886260987], [24.917496109009, 30.889234161377], [24.876943969727, 30.734719848633], [24.826179885865, 30.607495880127], [24.776388549805, 30.52749786377], [24.754442596436, 30.49944267273], [24.718607330322, 30.463887786866], [24.671942138672, 30.403886413575], [24.623194122315, 30.325969314575], [24.609999084473, 30.288888549805], [24.606804275513, 30.259164428711], [24.611526870728, 30.238051986695], [24.626108551025, 30.219720458985], [24.669165039063, 30.134164428711], [24.710276031494, 30.045831298828], [24.721109771729, 30.016385650635], [24.733053588868, 29.981664276123], [24.735830688477, 29.9587474823], [24.731804275513, 29.937080001831], [24.724996948242, 29.916944122315], [24.784719848633, 29.685830688477], [24.778400802613, 29.60846862793], [24.797220611573, 29.562219238282], [24.81166305542, 29.532777404785], [24.897776031494, 29.348886108399], [24.8994430542, 29.056943511963], [24.900275929769, 28.830553944906], [24.900692367554, 28.717359161377], [24.901108805339, 28.604164377849], [24.901941680908, 28.177774810791], [24.902498626709, 28.024996185303], [24.901941680908, 27.900194549561], [24.902220153809, 27.798887634277], [24.901941680908, 27.660276794434], [24.90122833252, 27.566324615479], [24.901663208008, 27.507776641846], [24.900831604004, 27.32749786377], [24.900415802002, 27.154026412964], [24.9, 26.980554962159], [24.900156402588, 26.899443054199], [24.900553131104, 26.841665649414], [24.900274658203, 26.619718933106], [24.9, 26.467218780518], [24.899164581299, 26.38388671875], [24.898748779297, 26.127359771729], [24.898332977295, 25.870832824707], [25.158304996936, 25.780397428174], [25.418277016577, 25.68996203164], [25.736254564236, 25.678103806781], [26.054232111896, 25.666245581922], [26.324334569475, 25.652807487178], [26.414368722001, 25.648328122263], [26.594437027054, 25.639369392433], [26.774505332107, 25.630410662604], [26.864539484633, 25.625931297689], [27.134641942212, 25.612493202945], [27.631995052701, 25.612885473615], [27.929348163189, 25.613277744286], [28.226701273678, 25.613670014956], [28.524054384167, 25.614062285627], [28.821407494656, 25.614454556298], [29.110729415757, 25.616323268629], [29.400051336859, 25.61819198096], [29.68937325796, 25.620060693292], [29.978695179062, 25.621929405623], [30.1, 25.653807359367], [30.1, 25.965304213745], [30.1, 26.276801068123], [30.1, 26.5882979225], [30.1, 26.899794776878], [30.1, 27.211291631256], [30.01382342436, 27.383644782535], [29.988219111901, 27.434853407454], [29.889240380031, 27.632810871193], [29.876438223801, 27.658415183653], [29.764657335702, 27.881976959851], [29.682899712861, 28.13892948878], [29.60114209002, 28.595882017709], [29.546637008126, 28.860620986908], [29.492131926232, 29.125359956108], [29.437626844338, 29.390098925307], [29.390908202715, 29.658731114641], [29.375335322174, 29.748275177753], [29.344189561091, 29.927363303976], [29.313043800009, 30.106451430199], [29.297470919468, 30.195995493311], [29.250752277845, 30.464627682645], [29.250752277845, 30.719845250045], [29.250752277845, 30.975062817445],
                ],
            ],
        ];
    }
}
