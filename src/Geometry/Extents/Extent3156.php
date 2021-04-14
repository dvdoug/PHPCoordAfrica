<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Africa/Congo DR (Zaire) - 23°E to 25°E.
 * @internal
 */
class Extent3156
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [24.999998450007, 4.9822250214872], [24.995693206787, 4.98263835907], [24.97416305542, 4.987499713898], [24.950830459595, 4.9858326911927], [24.818332672119, 4.9388885498049], [24.777774810791, 4.9152774810794], [24.734443664551, 4.9108324050907], [24.642776489258, 4.9730548858644], [24.604997634888, 5.0220131874086], [24.525554656983, 5.0772218704226], [24.476215362549, 5.0984315872194], [24.459442138672, 5.1054158210755], [24.387289047241, 5.1121520996096], [24.357358932495, 5.0570135116578], [24.397914886475, 5.0352773666384], [24.367498397827, 5.0088882446291], [24.239719390869, 4.9588880538943], [24.191665649414, 4.9419441223145], [24.063053131104, 4.9016666412355], [23.888610839844, 4.8238887786868], [23.826665878296, 4.8193740844729], [23.579719543457, 4.7323603630069], [23.439720153809, 4.6504855155947], [23.429580688477, 4.6318049430848], [23.424512863159, 4.5937490463258], [23.382499694825, 4.5880551338197], [23.325901031494, 4.6000690460206], [23.211940765381, 4.681943893433], [23.098817825318, 4.7074995040896], [23.016803741455, 4.7495827674867], [23.00000211542, 4.7871735423923], [22.999995941107, 4.4562860253712], [22.999995941107, 4.1253985083213], [22.999995941107, 3.7945109912763], [22.999995941107, 3.4636234742328], [22.999995941107, 3.13273595719], [22.999995941107, 2.8018484401477], [22.999995941107, 2.4709609231055], [22.999995941107, 2.1400734060635], [22.999995941107, 1.8091858890217], [22.999995941107, 1.4782983719798], [22.999995941107, 1.1474108549381], [22.999995941107, 0.81652333789634], [22.999995941107, 0.48563582085465], [22.999995941107, 0.15474830381298], [22.999995941107, -0.17613921322867], [22.999995941107, -0.50702673027031], [22.999995941107, -0.83791424731193], [22.999995941107, -1.1688017643535], [22.999995941107, -1.4996892813951], [22.999995941107, -1.8305767984367], [22.999995941107, -2.1614643154783], [22.999995941107, -2.4923518325199], [22.999995941107, -2.8232393495615], [22.999995941107, -3.1541268666031], [22.999995941107, -3.4850143836446], [22.999995941107, -3.8159019006862], [22.999995941107, -4.1467894177277], [22.999995941107, -4.4776769347693], [22.999995941107, -4.8085644518109], [22.999995941107, -5.1394519688524], [22.999995941107, -5.470339485894], [22.999995941107, -5.8012270029355], [22.999995941107, -6.1321145199771], [22.999995941107, -6.4630020370186], [22.999995941107, -6.7938895540602], [22.999995941107, -7.1247770711017], [22.999995941107, -7.4556645881432], [22.999995941107, -7.7865521051848], [22.999995941107, -8.1174396222263], [22.999995941107, -8.4483271392679], [22.999995941107, -8.7792146563094], [22.999995941107, -9.1101021733509], [22.999995941107, -9.4409896903925], [22.999995941107, -9.771877207434], [22.999995941107, -10.102764724476], [22.999995941107, -10.433652241517], [22.999995941107, -10.764539758559], [22.999995941107, -11.0954272756], [23.016941070557, -11.096111297607], [23.088054656982, -11.096389770508], [23.217012405396, -11.076597213745], [23.241943359375, -11.061667442322], [23.293888092041, -11.026945114136], [23.368053436279, -10.982778549194], [23.397499084473, -10.970277786255], [23.421943664551, -10.963195800781], [23.456108093262, -10.959166526794], [23.476387023926, -10.958333969116], [23.49666595459, -10.958889007568], [23.519996643066, -10.962223052978], [23.54305267334, -10.966945648193], [23.585830688477, -10.980001449585], [23.610275268555, -10.990278244019], [23.665136337281, -11.010833740234], [23.858610153199, -11.027153968811], [23.886108398438, -11.014722824096], [23.954025268555, -10.933751106262], [23.986206054688, -10.870461463928], [23.994720458985, -10.869167327881], [24.058469772339, -10.87861251831], [24.092220306397, -10.893611907959], [24.131942749024, -10.916666984558], [24.142219543457, -10.979445457458], [24.185552597046, -11.029583930969], [24.318470001221, -11.051320075989], [24.376804351807, -11.088611602783], [24.398609161377, -11.111806869507], [24.416524887085, -11.216598510742], [24.409997940064, -11.28007030487], [24.365970611572, -11.34986114502], [24.375274658203, -11.404724121094], [24.44916343689, -11.462639808655], [24.526388168335, -11.461389541626], [24.584163665772, -11.4377784729], [24.602914810181, -11.40479183197], [24.692775726319, -11.340000152588], [24.739721298218, -11.317084312439], [24.98027420044, -11.265001296997], [25.000002221025, -11.263775279114], [24.999998450007, -10.932224252579], [24.999998450007, -10.600673226033], [24.999998450007, -10.269122199489], [24.999998450007, -9.9375711729451], [24.999998450007, -9.6060201464018], [24.999998450007, -9.2744691198586], [24.999998450007, -8.9429180933154], [24.999998450007, -8.6113670667724], [24.999998450007, -8.2798160402293], [24.999998450007, -7.9482650136863], [24.999998450007, -7.6167139871434], [24.999998450007, -7.2851629606004], [24.999998450007, -6.9536119340574], [24.999998450007, -6.6220609075145], [24.999998450007, -6.2905098809716], [24.999998450007, -5.9589588544286], [24.999998450007, -5.6274078278857], [24.999998450007, -5.2958568013428], [24.999998450007, -4.9643057747999], [24.999998450007, -4.6327547482569], [24.999998450007, -4.301203721714], [24.999998450007, -3.9696526951711], [24.999998450007, -3.6381016686282], [24.999998450007, -3.3065506420853], [24.999998450007, -2.9749996155424], [24.999998450007, -2.6434485889995], [24.999998450007, -2.3118975624566], [24.999998450007, -1.9803465359137], [24.999998450007, -1.6487955093708], [24.999998450007, -1.3172444828279], [24.999998450007, -0.98569345628496], [24.999998450007, -0.65414242974206], [24.999998450007, -0.32259140319916], [24.999998450007, 0.0089596233437355], [24.999998450007, 0.34051064988663], [24.999998450007, 0.67206167642953], [24.999998450007, 1.0036127029724], [24.999998450007, 1.3351637295153], [24.999998450007, 1.6667147560582], [24.999998450007, 1.9982657826011], [24.999998450007, 2.329816809144], [24.999998450007, 2.6613678356869], [24.999998450007, 2.9929188622298], [24.999998450007, 3.3244698887727], [24.999998450007, 3.6560209153156], [24.999998450007, 3.9875719418585], [24.999998450007, 4.3191229684014], [24.999998450007, 4.6506739949443], [24.999998450007, 4.9822250214872],
                ],
            ],
        ];
    }
}
