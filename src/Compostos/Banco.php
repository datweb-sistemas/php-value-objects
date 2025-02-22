<?php

namespace Datweb\Vo\Compostos;

enum Banco: int
{
    case BancoDoBrasil = 1;
    case BRB = 70;
    case Santinvest = 539;
    case Crediseara = 430;
    case Agk = 272;
    case UnicredBrasil = 136;
    case IndigoInvestimentos = 407;
    case Caixa = 104;
    case Inter = 77;
    case ColunaInvestimentos = 423;
    case BancoRibeiraoPreto = 741;
    case BancoBari = 330;
    case Cetelem = 739;
    case Ewally = 534;
    case BancoSemear = 743;
    case PlannerCorretora = 100;
    case FGC = 541;
    case B3 = 96;
    case Rabobank = 747;
    case Cielo = 362;
    case Crediluz = 322;
    case Sicredi = 748;
    case Crehnor = 350;
    case BNPParibas = 752;
    case Cooperforte = 379;
    case KirtonBank = 399;
    case BancoBrasileiroCredito = 378;
    case BV = 413;
    case Sicoob = 756;
    case TrinusCapital = 360;
    case KEBHanaBrasil = 757;
    case XP = 102;
    case Sisprime = 84;
    case CMMarkets = 180;
    case MorganStanley = 66;
    case UBS = 15;
    case TrevisoCambio = 143;
    case Hipercard = 62;
    case  JSafra = 74;
    case Uniprime = 99;
    case BancoToyota = 387;
    case ParatiCredito = 326;
    case Alfa = 25;
    case ABNAmro = 75;
    case BancoCargill = 40;
    case TerraInvestimentos = 307;
    case CecmPortuariosVitoria = 385;
    case SocinalCredito = 425;
    case Servicoop = 190;
    case OzCambio = 296;
    case Bradescard = 63;
    case NovaFuturaInvestimentos = 191;
    case Fiducia = 382;
    case GoldmanSachs = 64;
    case CecmServidoresPublicosSP = 459;
    case CredisisCentral = 97;
    case CecmDespachantesTransitoSCRS = 16;
    case Afinz = 299;
    case CecmServidoresPublicosPinhao = 471;
    case PortosegCredito = 468;
    case Inbursa = 12;
    case BancoAmazonia = 3;
    case ConfidenceCambio = 60;
    case Banpara = 37;
    case ViaCertaCredito = 411;
    case ZemaCredito = 359;
    case CasaCredito = 159;
    case Ailos = 85;
    case Creditag = 400;
    case CrediareCredito = 429;
    case PlannerCreditoDireto = 410;
    case CecooPes = 114;
    case CecmCalcadosSapiranga = 328;
    case Bbi = 36;
    case LigaInvestimentos = 469;
    case BradescoFinanciamentos = 394;
    case BNB = 4;
    case HedgeInvestments = 458;
    case CcbBrasil = 320;
    case HsFinanceira = 189;
    case LeccaCredito = 105;
    case KdbBrasil = 76;
    case Topazio = 82;
    case Hscm = 312;
    case ValorCreditoDireto = 195;
    case Polocred = 93;
    case Credibiam = 391;
    case CrediSaoMiguelOeste = 273;
    case Csf = 368;
    case Pagseguro = 290;
    case MoneycorpCambio = 259;
    case FdGold = 395;
    case Efi = 364;
    case IcapBrasil = 157;
    case Socred = 183;
    case StateStreetBrasil = 14;
    case CaruanaCredito = 130;
    case MidwayCredito = 358;
    case CodepeCambio = 127;
    case PicpayBank = 79;
    case MasterInvestimento = 141;
    case Superdigital = 340;
    case BancoSeguro = 81;
    case BancoYamaha = 475;
    case CresolConfederacao = 133;
    case MercadoPago = 323;
    case Agibank = 121;
    case BancoChinaBrasil = 83;
    case GetMoneyCambio = 138;
    case Bandepe = 24;
    case GlobalFinanceira = 384;
    case NeonFinanceira = 426;
    case BancoRandon = 88;
    case OmInvestimentos = 319;
    case Bmp = 274;
    case TravelexCambio = 95;
    case Finaxis = 94;
    case GazincredCredito = 478;
    case Senff = 276;
    case MiraeAsset = 447;
    case Banese = 47;
    case BexsCambio = 144;
    case AcessoPagamentos = 332;
    case Fitbank = 450;
    case BrPartners = 126;
    case OramaInvestimentos = 325;
    case Dock = 301;
    case BrlTrust = 173;
    case FramCapital = 331;
    case WesternUnion = 119;
    case HubPagamentos = 396;
    case Celcoin = 509;
    case CambionetCambio = 309;
    case ParanaBanco = 254;
    case BariHipotecaria = 268;
    case Iugu = 401;
    case BocomBbm = 107;
    case Besa = 334;
    case SocialBank = 412;
    case WooriBankBrasil = 124;
    case FactaCredito = 149;
    case Stone = 197;
    case IdInvestimentos = 439;
    case AmazoniaCambio = 313;
    case BrokerBrasilCambio = 142;
    case Pinbank = 529;
    case MercantilBrasil = 389;
    case ItauBba = 184;
    case BancoTriangulo = 634;
    case SensoInvestimentos = 545;
    case IcbcBrasil = 132;
    case VipsCambio = 298;
    case BmsCreditoDireto = 377;
    case Crefaz = 321;
    case NuPagamentos = 260;
    case CdcCreditoDireto = 470;
    case UbsBrasilInvestimento = 129;
    case BrazaBankCambio = 128;
    case LamaraCreditoDireto = 416;
    case Asaas = 461;
    case ParmetalInvestimentos = 194;
    case NeonPagamentos = 536;
    case Ebanx = 383;
    case CartosCreditoDireto = 324;
    case VortxInvestimentos = 310;
    case Picpay = 380;
    case WillFinanceira = 280;
    case GuittaCambio = 146;
    case Ffa = 343;
    case Primacredi = 279;
    case Digio = 335;
    case Al5Credito = 349;
    case CredUfes = 427;
    case RealizeCredito = 374;
    case GenialInvestimentos = 278;
    case IbInvestimentos = 271;
    case Banestes = 21;
    case AbcBrasil = 246;
    case Bs2Investimentos = 292;
    case ScotiabankBrasil = 751;
    case ToroInvestimentos = 352;
    case BtgPactual = 208;
    case NuFinanceira = 386;
    case Modalmais = 746;
    case U4c = 546;
    case Classico = 241;
    case IdealInvestimentos = 398;
    case C6Bank = 336;
    case Guanabara = 612;
    case IndustrialBrasil = 604;
    case CreditSuisseBrasil = 505;
    case QiCreditoDireto = 329;
    case FairCambio = 196;
    case Creditas = 342;
    case BancoNacionArgentina = 300;
    case CitibankNa = 477;
    case Cedula = 266;
    case BradescoBerj = 122;
    case JPMorgan = 376;
    case XpBanco = 348;
    case CaixaGeralBrasil = 473;
    case CitibankBrasil = 745;
    case Rodobens = 120;
    case Fator = 265;
    case Bndes = 7;
    case AtivaInvestimentos = 188;
    case BgcLiquidez = 134;
    case ItauConsignado = 29;
    case MasterCorretora = 467;
    case BancoMaster = 243;
    case ListoCreditoDireto = 397;
    case HaitongBrasil = 78;
    case IntercamCambio = 525;
    case OtimoCreditoDireto = 355;
    case VitreoInvestimentos = 367;
    case ReagInvestimentos = 528;
    case PlantaeCredito = 445;
    case UpP = 373;
    case OliveiraTrust = 111;
    case Finvest = 512;
    case QistaCredito = 516;
    case BonusPago = 408;
    case MafInvestimentos = 484;
    case CobuccioCredito = 402;
    case EfiCredito = 507;
    case Sumup = 404;
    case Zipdin = 418;
    case Lend = 414;
    case Dm = 449;
    case MercadoCredito = 518;
    case Accredito = 406;
    case Cora = 403;
    case Numbrs = 419;
    case Delcred = 435;
    case FenixInvestimentos = 455;
    case LarCredi = 421;
    case Credihome = 443;
    case Maru = 535;
    case Uy3 = 457;
    case Credsystem = 428;
    case HemeraInvestimentos = 448;
    case Credifit = 452;
    case Ffcred = 510;
    case Stark = 462;
    case CapitalConsig = 465;
    case PortoparInvestimentos = 306;
    case AzumiInvestimentos = 463;
    case J17 = 451;
    case TrinusCreditoDireto = 444;
    case LionsTrust = 519;
    case MeritoInvestimentos = 454;
    case Unavanti = 460;
    case Rji = 506;
    case Sbcash = 482;
    case BnyMellon = 17;
    case PefisaCredito = 174;
    case Superlogica = 481;
    case Peak = 521;
    case BrCapital = 433;
    case BancoProvinciaBuenosAires = 495;
    case HrDigital = 523;
    case Aticca = 527;
    case Magnum = 511;
    case AtfCredit = 513;
    case Genial = 125;
    case Eagle = 532;
    case Microcash = 537;
    case WntCapital = 524;
    case Monetarie = 526;
    case JPMorganChase = 488;
    case RedCreditoDireto = 522;
    case SerFinance = 530;
    case Andbank = 65;
    case LevycamCambio = 145;
    case Bcv = 250;
    case BexsCorretora = 253;
    case Hsbc = 269;
    case Arbi = 213;
    case IntesaSanpaoloBrasil = 139;
    case Tricury = 18;
    case Safra = 422;
    case Letsbank = 630;
    case Fibra = 224;
    case Volkswagen = 393;
    case LusoBrasileiro = 600;
    case Gm = 390;
    case Pan = 623;
    case Votorantim = 655;
    case Itaubank = 479;
    case MufgBrasil = 456;
    case SumitomoMitsuiBrasil = 464;
    case ItauUnibanco = 341;
    case Bradesco = 237;
    case MercedesBenz = 381;
    case Omni = 613;
    case Sofisa = 637;
    case Voiter = 653;
    case Crefisa = 69;
    case Mizuho = 370;
    case InvestcredUnibanco = 249;
    case Bmg = 318;
    case C6Consig = 626;
    case AvenueSecurities = 508;
    case SagiturCambio = 270;
    case SocieteGeneraleBrasil = 366;
    case NeonCorretora = 113;
    case TullettPrebonBrasil = 131;
    case CreditSuisseHedgingGriffo = 11;
    case Paulista = 611;
    case BofaMerrillLynch = 755;
    case Credisan = 89;
    case Pine = 643;
    case NuInvest = 140;
    case Daycoval = 707;
    case CarolInvestimentos = 288;
    case SingulareInvestimentos = 363;
    case Renasce = 101;
    case DeutscheBankBrasil = 487;
    case Cifra = 233;
    case GuideInvestimentos = 177;
    case Trustee = 438;
    case Simpaul = 365;
    case Rendimento = 633;
    case Bs2 = 218;
    case LastroRdv = 293;
    case FrenteCambio = 285;
    case BtCambio = 80;
    case NovoBancoContinental = 753;
    case CreditAgricoleBrasil = 222;
    case Coopavel = 281;
    case Sistema = 754;
    case DouradaCorretora = 311;
    case Credialianca = 98;
    case Vr = 610;
    case Ourinvest = 712;
    case Rnx = 720;
    case Credicoamo = 10;
    case Credibrf = 440;
    case Magnetis = 442;
    case RbInvestimentos = 283;
    case SantanderBrasil = 33;
    case JohnDeere = 217;
    case Banrisul = 41;
    case AdvancedCambio = 117;
    case Digimais = 654;
    case Warren = 371;
    case Original = 212;
    case EfxCambio = 289;

    public static function lista()
    {
        return [
            1 => [
                'nome_completo' => 'Banco do Brasil S.A.',
                'ispb' => '00000000',
                'nome_curto' => 'BCO DO BRASIL S.A.',
            ],
            70 => [
                'nome_completo' => 'BRB - BANCO DE BRASILIA S.A.',
                'ispb' => '00000208',
                'nome_curto' => 'BRB - BCO DE BRASILIA S.A.',
            ],
            539 => [
                'nome_completo' => 'SANTINVEST S.A. - CREDITO, FINANCIAMENTO E INVESTIMENTOS',
                'ispb' => '00122327',
                'nome_curto' => 'SANTINVEST S.A. - CFI',
            ],
            430 => [
                'nome_completo' => 'COOPERATIVA DE CREDITO RURAL SEARA - CREDISEARA',
                'ispb' => '00204963',
                'nome_curto' => 'CCR SEARA',
            ],
            272 => [
                'nome_completo' => 'AGK CORRETORA DE CAMBIO S.A.',
                'ispb' => '00250699',
                'nome_curto' => 'AGK CC S.A.',
            ],
            136 => [
                'nome_completo' => 'CONFEDERAÇÃO NACIONAL DAS COOPERATIVAS CENTRAIS UNICRED LTDA. - UNICRED DO BRASI',
                'ispb' => '00315557',
                'nome_curto' => 'CONF NAC COOP CENTRAIS UNICRED',
            ],
            407 => [
                'nome_completo' => 'ÍNDIGO INVESTIMENTOS DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '00329598',
                'nome_curto' => 'ÍNDIGO INVESTIMENTOS DTVM LTDA.',
            ],
            104 => [
                'nome_completo' => 'CAIXA ECONOMICA FEDERAL',
                'ispb' => '00360305',
                'nome_curto' => 'CAIXA ECONOMICA FEDERAL',
            ],
            77 => [
                'nome_completo' => 'Banco Inter S.A.',
                'ispb' => '00416968',
                'nome_curto' => 'BANCO INTER',
            ],
            423 => [
                'nome_completo' => 'COLUNA S/A DISTRIBUIDORA DE TITULOS E VALORES MOBILIÁRIOS',
                'ispb' => '00460065',
                'nome_curto' => 'COLUNA S.A. DTVM',
            ],
            741 => [
                'nome_completo' => 'BANCO RIBEIRAO PRETO S.A.',
                'ispb' => '00517645',
                'nome_curto' => 'BCO RIBEIRAO PRETO S.A.',
            ],
            330 => [
                'nome_completo' => 'BANCO BARI DE INVESTIMENTOS E FINANCIAMENTOS S.A.',
                'ispb' => '00556603',
                'nome_curto' => 'BANCO BARI S.A.',
            ],
            739 => [
                'nome_completo' => 'Banco Cetelem S.A.',
                'ispb' => '00558456',
                'nome_curto' => 'BCO CETELEM S.A.',
            ],
            534 => [
                'nome_completo' => 'EWALLY INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '00714671',
                'nome_curto' => 'EWALLY IP S.A.',
            ],
            743 => [
                'nome_completo' => 'Banco Semear S.A.',
                'ispb' => '00795423',
                'nome_curto' => 'BANCO SEMEAR',
            ],
            100 => [
                'nome_completo' => 'Planner Corretora de Valores S.A.',
                'ispb' => '00806535',
                'nome_curto' => 'PLANNER CV S.A.',
            ],
            541 => [
                'nome_completo' => 'FUNDO GARANTIDOR DE CREDITOS - FGC',
                'ispb' => '00954288',
                'nome_curto' => 'FDO GARANTIDOR CRÉDITOS',
            ],
            96 => [
                'nome_completo' => 'Banco B3 S.A.',
                'ispb' => '00997185',
                'nome_curto' => 'BCO B3 S.A.',
            ],
            747 => [
                'nome_completo' => 'Banco Rabobank International Brasil S.A.',
                'ispb' => '01023570',
                'nome_curto' => 'BCO RABOBANK INTL BRASIL S.A.',
            ],
            362 => [
                'nome_completo' => 'CIELO S.A. - INSTITUIÇÃO DE PAGAMENTO',
                'ispb' => '01027058',
                'nome_curto' => 'CIELO IP S.A.',
            ],
            322 => [
                'nome_completo' => 'Cooperativa de Crédito Rural de Abelardo Luz - Sulcredi/Crediluz',
                'ispb' => '01073966',
                'nome_curto' => 'CCR DE ABELARDO LUZ',
            ],
            748 => [
                'nome_completo' => 'BANCO COOPERATIVO SICREDI S.A.',
                'ispb' => '01181521',
                'nome_curto' => 'BCO COOPERATIVO SICREDI S.A.',
            ],
            350 => [
                'nome_completo' => 'COOPERATIVA DE CRÉDITO RURAL DE PEQUENOS AGRICULTORES E DA REFORMA AGRÁRIA DO CE',
                'ispb' => '01330387',
                'nome_curto' => 'CREHNOR LARANJEIRAS',
            ],
            752 => [
                'nome_completo' => 'Banco BNP Paribas Brasil S.A.',
                'ispb' => '01522368',
                'nome_curto' => 'BCO BNP PARIBAS BRASIL S A',
            ],
            379 => [
                'nome_completo' => 'COOPERFORTE - COOPERATIVA DE ECONOMIA E CRÉDITO MÚTUO DE FUNCIONÁRIOS DE INSTITUI',
                'ispb' => '01658426',
                'nome_curto' => 'CECM COOPERFORTE',
            ],
            399 => [
                'nome_completo' => 'Kirton Bank S.A. - Banco Múltiplo',
                'ispb' => '01701201',
                'nome_curto' => 'KIRTON BANK',
            ],
            378 => [
                'nome_completo' => 'BANCO BRASILEIRO DE CRÉDITO SOCIEDADE ANÔNIMA',
                'ispb' => '01852137',
                'nome_curto' => 'BCO BRASILEIRO DE CRÉDITO S.A.',
            ],
            413 => [
                'nome_completo' => 'BANCO BV S.A.',
                'ispb' => '01858774',
                'nome_curto' => 'BCO BV S.A.',
            ],
            756 => [
                'nome_completo' => 'BANCO COOPERATIVO SICOOB S.A. - BANCO SICOOB',
                'ispb' => '02038232',
                'nome_curto' => 'BANCO SICOOB S.A.',
            ],
            360 => [
                'nome_completo' => 'TRINUS CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '02276653',
                'nome_curto' => 'TRINUS CAPITAL DTVM',
            ],
            757 => [
                'nome_completo' => 'BANCO KEB HANA DO BRASIL S.A.',
                'ispb' => '02318507',
                'nome_curto' => 'BCO KEB HANA DO BRASIL S.A.',
            ],
            102 => [
                'nome_completo' => 'XP INVESTIMENTOS CORRETORA DE CÂMBIO,TÍTULOS E VALORES MOBILIÁRIOS S/A',
                'ispb' => '02332886',
                'nome_curto' => 'XP INVESTIMENTOS CCTVM S/A',
            ],
            84 => [
                'nome_completo' => 'SISPRIME DO BRASIL - COOPERATIVA DE CRÉDITO',
                'ispb' => '02398976',
                'nome_curto' => 'SISPRIME DO BRASIL - COOP',
            ],
            180 => [
                'nome_completo' => 'CM CAPITAL MARKETS CORRETORA DE CÂMBIO, TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '02685483',
                'nome_curto' => 'CM CAPITAL MARKETS CCTVM LTDA',
            ],
            66 => [
                'nome_completo' => 'BANCO MORGAN STANLEY S.A.',
                'ispb' => '02801938',
                'nome_curto' => 'BCO MORGAN STANLEY S.A.',
            ],
            15 => [
                'nome_completo' => 'UBS Brasil Corretora de Câmbio, Títulos e Valores Mobiliários S.A.',
                'ispb' => '02819125',
                'nome_curto' => 'UBS BRASIL CCTVM S.A.',
            ],
            143 => [
                'nome_completo' => 'Treviso Corretora de Câmbio S.A.',
                'ispb' => '02992317',
                'nome_curto' => 'TREVISO CC S.A.',
            ],
            62 => [
                'nome_completo' => 'Hipercard Banco Múltiplo S.A.',
                'ispb' => '03012230',
                'nome_curto' => 'HIPERCARD BM S.A.',
            ],
            74 => [
                'nome_completo' => 'Banco J. Safra S.A.',
                'ispb' => '03017677',
                'nome_curto' => 'BCO. J.SAFRA S.A.',
            ],
            99 => [
                'nome_completo' => 'UNIPRIME CENTRAL NACIONAL - CENTRAL NACIONAL DE COOPERATIVA DE CREDITO',
                'ispb' => '03046391',
                'nome_curto' => 'UNIPRIME COOPCENTRAL LTDA.',
            ],
            387 => [
                'nome_completo' => 'Banco Toyota do Brasil S.A.',
                'ispb' => '03215790',
                'nome_curto' => 'BCO TOYOTA DO BRASIL S.A.',
            ],
            326 => [
                'nome_completo' => 'PARATI - CREDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
                'ispb' => '03311443',
                'nome_curto' => 'PARATI - CFI S.A.',
            ],
            25 => [
                'nome_completo' => 'Banco Alfa S.A.',
                'ispb' => '03323840',
                'nome_curto' => 'BCO ALFA S.A.',
            ],
            75 => [
                'nome_completo' => 'Banco ABN Amro S.A.',
                'ispb' => '03532415',
                'nome_curto' => 'BCO ABN AMRO S.A.',
            ],
            40 => [
                'nome_completo' => 'Banco Cargill S.A.',
                'ispb' => '03609817',
                'nome_curto' => 'BCO CARGILL S.A.',
            ],
            307 => [
                'nome_completo' => 'Terra Investimentos Distribuidora de Títulos e Valores Mobiliários Ltda.',
                'ispb' => '03751794',
                'nome_curto' => 'TERRA INVESTIMENTOS DTVM',
            ],
            385 => [
                'nome_completo' => 'COOPERATIVA DE ECONOMIA E CREDITO MUTUO DOS TRABALHADORES PORTUARIOS DA GRANDE V',
                'ispb' => '03844699',
                'nome_curto' => 'CECM DOS TRAB.PORT. DA G.VITOR',
            ],
            425 => [
                'nome_completo' => 'SOCINAL S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '03881423',
                'nome_curto' => 'SOCINAL S.A. CFI',
            ],
            190 => [
                'nome_completo' => 'SERVICOOP - COOPERATIVA DE CRÉDITO DOS SERVIDORES PÚBLICOS ESTADUAIS E MUNICIPAI',
                'ispb' => '03973814',
                'nome_curto' => 'SERVICOOP',
            ],
            296 => [
                'nome_completo' => 'OZ CORRETORA DE CÂMBIO S.A.',
                'ispb' => '04062902',
                'nome_curto' => 'OZ CORRETORA DE CÂMBIO S.A.',
            ],
            63 => [
                'nome_completo' => 'Banco Bradescard S.A.',
                'ispb' => '04184779',
                'nome_curto' => 'BANCO BRADESCARD',
            ],
            191 => [
                'nome_completo' => 'Nova Futura Corretora de Títulos e Valores Mobiliários Ltda.',
                'ispb' => '04257795',
                'nome_curto' => 'NOVA FUTURA CTVM LTDA.',
            ],
            382 => [
                'nome_completo' => 'FIDÚCIA SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE L',
                'ispb' => '04307598',
                'nome_curto' => 'FIDUCIA SCMEPP LTDA',
            ],
            64 => [
                'nome_completo' => 'GOLDMAN SACHS DO BRASIL BANCO MULTIPLO S.A.',
                'ispb' => '04332281',
                'nome_curto' => 'GOLDMAN SACHS DO BRASIL BM S.A',
            ],
            459 => [
                'nome_completo' => 'COOPERATIVA DE CRÉDITO MÚTUO DE SERVIDORES PÚBLICOS DO ESTADO DE SÃO PAULO - CRE',
                'ispb' => '04546162',
                'nome_curto' => 'CCM SERV. PÚBLICOS SP',
            ],
            97 => [
                'nome_completo' => 'Credisis - Central de Cooperativas de Crédito Ltda.',
                'ispb' => '04632856',
                'nome_curto' => 'CREDISIS CENTRAL DE COOPERATIVAS DE CRÉDITO LTDA.',
            ],
            16 => [
                'nome_completo' => 'COOPERATIVA DE CRÉDITO MÚTUO DOS DESPACHANTES DE TRÂNSITO DE SANTA CATARINA E RI',
                'ispb' => '04715685',
                'nome_curto' => 'CCM DESP TRÂNS SC E RS',
            ],
            299 => [
                'nome_completo' => 'BANCO AFINZ S.A. - BANCO MÚLTIPLO',
                'ispb' => '04814563',
                'nome_curto' => 'BCO AFINZ S.A. - BM',
            ],
            471 => [
                'nome_completo' => 'COOPERATIVA DE ECONOMIA E CREDITO MUTUO DOS SERVIDORES PUBLICOS DE PINHÃO - CRES',
                'ispb' => '04831810',
                'nome_curto' => 'CECM SERV PUBL PINHÃO',
            ],
            468 => [
                'nome_completo' => 'PORTOSEG S.A. - CREDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '04862600',
                'nome_curto' => 'PORTOSEG S.A. CFI',
            ],
            12 => [
                'nome_completo' => 'Banco Inbursa S.A.',
                'ispb' => '04866275',
                'nome_curto' => 'BANCO INBURSA',
            ],
            3 => [
                'nome_completo' => 'BANCO DA AMAZONIA S.A.',
                'ispb' => '04902979',
                'nome_curto' => 'BCO DA AMAZONIA S.A.',
            ],
            60 => [
                'nome_completo' => 'Confidence Corretora de Câmbio S.A.',
                'ispb' => '04913129',
                'nome_curto' => 'CONFIDENCE CC S.A.',
            ],
            37 => [
                'nome_completo' => 'Banco do Estado do Pará S.A.',
                'ispb' => '04913711',
                'nome_curto' => 'BCO DO EST. DO PA S.A.',
            ],
            411 => [
                'nome_completo' => 'Via Certa Financiadora S.A. - Crédito, Financiamento e Investimentos',
                'ispb' => '05192316',
                'nome_curto' => 'VIA CERTA FINANCIADORA S.A. - CFI',
            ],
            359 => [
                'nome_completo' => 'ZEMA CRÉDITO, FINANCIAMENTO E INVESTIMENTO S/A',
                'ispb' => '05351887',
                'nome_curto' => 'ZEMA CFI S/A',
            ],
            159 => [
                'nome_completo' => 'Casa do Crédito S.A. Sociedade de Crédito ao Microempreendedor',
                'ispb' => '05442029',
                'nome_curto' => 'CASA CREDITO S.A. SCM',
            ],
            85 => [
                'nome_completo' => 'Cooperativa Central de Crédito - Ailos',
                'ispb' => '05463212',
                'nome_curto' => 'COOPCENTRAL AILOS',
            ],
            400 => [
                'nome_completo' => 'COOPERATIVA DE CRÉDITO, POUPANÇA E SERVIÇOS FINANCEIROS DO CENTRO OESTE - CREDIT',
                'ispb' => '05491616',
                'nome_curto' => 'COOP CREDITAG',
            ],
            429 => [
                'nome_completo' => 'Crediare S.A. - Crédito, financiamento e investimento',
                'ispb' => '05676026',
                'nome_curto' => 'CREDIARE CFI S.A.',
            ],
            410 => [
                'nome_completo' => 'PLANNER SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '05684234',
                'nome_curto' => 'PLANNER SOCIEDADE DE CRÉDITO DIRETO',
            ],
            114 => [
                'nome_completo' => 'Central Cooperativa de Crédito no Estado do Espírito Santo - CECOOP',
                'ispb' => '05790149',
                'nome_curto' => 'CENTRAL COOPERATIVA DE CRÉDITO NO ESTADO DO ESPÍRITO SANTO',
            ],
            328 => [
                'nome_completo' => 'COOPERATIVA DE ECONOMIA E CRÉDITO MÚTUO DOS FABRICANTES DE CALÇADOS DE SAPIRANGA',
                'ispb' => '05841967',
                'nome_curto' => 'CECM FABRIC CALÇADOS SAPIRANGA',
            ],
            36 => [
                'nome_completo' => 'Banco Bradesco BBI S.A.',
                'ispb' => '06271464',
                'nome_curto' => 'BCO BBI S.A.',
            ],
            469 => [
                'nome_completo' => 'LIGA INVEST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '07138049',
                'nome_curto' => 'LIGA INVEST DTVM LTDA.',
            ],
            394 => [
                'nome_completo' => 'Banco Bradesco Financiamentos S.A.',
                'ispb' => '07207996',
                'nome_curto' => 'BCO BRADESCO FINANC. S.A.',
            ],
            4 => [
                'nome_completo' => 'Banco do Nordeste do Brasil S.A.',
                'ispb' => '07237373',
                'nome_curto' => 'BCO DO NORDESTE DO BRASIL S.A.',
            ],
            458 => [
                'nome_completo' => 'HEDGE INVESTMENTS DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '07253654',
                'nome_curto' => 'HEDGE INVESTMENTS DTVM LTDA.',
            ],
            320 => [
                'nome_completo' => 'China Construction Bank (Brasil) Banco Múltiplo S/A',
                'ispb' => '07450604',
                'nome_curto' => 'BCO CCB BRASIL S.A.',
            ],
            189 => [
                'nome_completo' => 'HS FINANCEIRA S/A CREDITO, FINANCIAMENTO E INVESTIMENTOS',
                'ispb' => '07512441',
                'nome_curto' => 'HS FINANCEIRA',
            ],
            105 => [
                'nome_completo' => 'Lecca Crédito, Financiamento e Investimento S/A',
                'ispb' => '07652226',
                'nome_curto' => 'LECCA CFI S.A.',
            ],
            76 => [
                'nome_completo' => 'Banco KDB do Brasil S.A.',
                'ispb' => '07656500',
                'nome_curto' => 'BCO KDB BRASIL S.A.',
            ],
            82 => [
                'nome_completo' => 'BANCO TOPÁZIO S.A.',
                'ispb' => '07679404',
                'nome_curto' => 'BANCO TOPÁZIO S.A.',
            ],
            312 => [
                'nome_completo' => 'HSCM - SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE LT',
                'ispb' => '07693858',
                'nome_curto' => 'HSCM SCMEPP LTDA.',
            ],
            195 => [
                'nome_completo' => 'VALOR SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '07799277',
                'nome_curto' => 'VALOR SCD S.A.',
            ],
            93 => [
                'nome_completo' => 'PÓLOCRED   SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORT',
                'ispb' => '07945233',
                'nome_curto' => 'POLOCRED SCMEPP LTDA.',
            ],
            391 => [
                'nome_completo' => 'COOPERATIVA DE CREDITO RURAL DE IBIAM - SULCREDI/IBIAM',
                'ispb' => '08240446',
                'nome_curto' => 'CCR DE IBIAM',
            ],
            273 => [
                'nome_completo' => 'Cooperativa de Crédito Rural de São Miguel do Oeste - Sulcredi/São Miguel',
                'ispb' => '08253539',
                'nome_curto' => 'CCR DE SÃO MIGUEL DO OESTE',
            ],
            368 => [
                'nome_completo' => 'Banco CSF S.A.',
                'ispb' => '08357240',
                'nome_curto' => 'BCO CSF S.A.',
            ],
            290 => [
                'nome_completo' => 'PAGSEGURO INTERNET INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '08561701',
                'nome_curto' => 'PAGSEGURO INTERNET IP S.A.',
            ],
            259 => [
                'nome_completo' => 'MONEYCORP BANCO DE CÂMBIO S.A.',
                'ispb' => '08609934',
                'nome_curto' => 'MONEYCORP BCO DE CÂMBIO S.A.',
            ],
            395 => [
                'nome_completo' => 'F.D\'GOLD - DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '08673569',
                'nome_curto' => 'F D GOLD DTVM LTDA',
            ],
            364 => [
                'nome_completo' => 'EFÍ S.A. - INSTITUIÇÃO DE PAGAMENTO',
                'ispb' => '09089356',
                'nome_curto' => 'EFÍ S.A. - IP',
            ],
            157 => [
                'nome_completo' => 'ICAP do Brasil Corretora de Títulos e Valores Mobiliários Ltda.',
                'ispb' => '09105360',
                'nome_curto' => 'ICAP DO BRASIL CTVM LTDA.',
            ],
            183 => [
                'nome_completo' => 'SOCRED S.A. - SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO P',
                'ispb' => '09210106',
                'nome_curto' => 'SOCRED SA - SCMEPP',
            ],
            14 => [
                'nome_completo' => 'STATE STREET BRASIL S.A. - BANCO COMERCIAL',
                'ispb' => '09274232',
                'nome_curto' => 'STATE STREET BR S.A. BCO COMERCIAL',
            ],
            130 => [
                'nome_completo' => 'CARUANA S.A. - SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '09313766',
                'nome_curto' => 'CARUANA SCFI',
            ],
            358 => [
                'nome_completo' => 'MIDWAY S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '09464032',
                'nome_curto' => 'MIDWAY S.A. - SCFI',
            ],
            127 => [
                'nome_completo' => 'Codepe Corretora de Valores e Câmbio S.A.',
                'ispb' => '09512542',
                'nome_curto' => 'CODEPE CVC S.A.',
            ],
            79 => [
                'nome_completo' => 'PICPAY BANK - BANCO MÚLTIPLO S.A',
                'ispb' => '09516419',
                'nome_curto' => 'PICPAY BANK - BANCO MÚLTIPLO S.A',
            ],
            141 => [
                'nome_completo' => 'BANCO MASTER DE INVESTIMENTO S.A.',
                'ispb' => '09526594',
                'nome_curto' => 'MASTER BI S.A.',
            ],
            340 => [
                'nome_completo' => 'SUPERDIGITAL INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '09554480',
                'nome_curto' => 'SUPERDIGITAL I.P. S.A.',
            ],
            81 => [
                'nome_completo' => 'BancoSeguro S.A.',
                'ispb' => '10264663',
                'nome_curto' => 'BANCOSEGURO S.A.',
            ],
            475 => [
                'nome_completo' => 'Banco Yamaha Motor do Brasil S.A.',
                'ispb' => '10371492',
                'nome_curto' => 'BCO YAMAHA MOTOR S.A.',
            ],
            133 => [
                'nome_completo' => 'CONFEDERAÇÃO NACIONAL DAS COOPERATIVAS CENTRAIS DE CRÉDITO E ECONOMIA FAMILIAR E',
                'ispb' => '10398952',
                'nome_curto' => 'CRESOL CONFEDERAÇÃO',
            ],
            323 => [
                'nome_completo' => 'MERCADO PAGO INSTITUIÇÃO DE PAGAMENTO LTDA.',
                'ispb' => '10573521',
                'nome_curto' => 'MERCADO PAGO IP LTDA.',
            ],
            121 => [
                'nome_completo' => 'Banco Agibank S.A.',
                'ispb' => '10664513',
                'nome_curto' => 'BCO AGIBANK S.A.',
            ],
            83 => [
                'nome_completo' => 'Banco da China Brasil S.A.',
                'ispb' => '10690848',
                'nome_curto' => 'BCO DA CHINA BRASIL S.A.',
            ],
            138 => [
                'nome_completo' => 'Get Money Corretora de Câmbio S.A.',
                'ispb' => '10853017',
                'nome_curto' => 'GET MONEY CC LTDA',
            ],
            24 => [
                'nome_completo' => 'Banco Bandepe S.A.',
                'ispb' => '10866788',
                'nome_curto' => 'BCO BANDEPE S.A.',
            ],
            384 => [
                'nome_completo' => 'GLOBAL FINANÇAS SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO',
                'ispb' => '11165756',
                'nome_curto' => 'GLOBAL SCM LTDA',
            ],
            426 => [
                'nome_completo' => 'NEON FINANCEIRA - CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
                'ispb' => '11285104',
                'nome_curto' => 'NEON FINANCEIRA - CFI S.A.',
            ],
            88 => [
                'nome_completo' => 'BANCO RANDON S.A.',
                'ispb' => '11476673',
                'nome_curto' => 'BANCO RANDON S.A.',
            ],
            319 => [
                'nome_completo' => 'OM DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '11495073',
                'nome_curto' => 'OM DTVM LTDA',
            ],
            274 => [
                'nome_completo' => 'BMP SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E A EMPRESA DE PEQUENO PORTE LTDA.',
                'ispb' => '11581339',
                'nome_curto' => 'BMP SCMEPP LTDA',
            ],
            95 => [
                'nome_completo' => 'Travelex Banco de Câmbio S.A.',
                'ispb' => '11703662',
                'nome_curto' => 'TRAVELEX BANCO DE CÂMBIO S.A.',
            ],
            94 => [
                'nome_completo' => 'Banco Finaxis S.A.',
                'ispb' => '11758741',
                'nome_curto' => 'BANCO FINAXIS',
            ],
            478 => [
                'nome_completo' => 'GAZINCRED S.A. SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '11760553',
                'nome_curto' => 'GAZINCRED S.A. SCFI',
            ],
            276 => [
                'nome_completo' => 'BANCO SENFF S.A.',
                'ispb' => '11970623',
                'nome_curto' => 'BCO SENFF S.A.',
            ],
            447 => [
                'nome_completo' => 'MIRAE ASSET WEALTH MANAGEMENT (BRAZIL) CORRETORA DE CÂMBIO, TÍTULOS E VALORES MO',
                'ispb' => '12392983',
                'nome_curto' => 'MIRAE ASSET CCTVM LTDA',
            ],
            47 => [
                'nome_completo' => 'Banco do Estado de Sergipe S.A.',
                'ispb' => '13009717',
                'nome_curto' => 'BCO DO EST. DE SE S.A.',
            ],
            144 => [
                'nome_completo' => 'BEXS BANCO DE CÂMBIO S/A',
                'ispb' => '13059145',
                'nome_curto' => 'BEXS BCO DE CAMBIO S.A.',
            ],
            332 => [
                'nome_completo' => 'ACESSO SOLUÇÕES DE PAGAMENTO S.A. - INSTITUIÇÃO DE PAGAMENTO',
                'ispb' => '13140088',
                'nome_curto' => 'ACESSO SOLUÇÕES DE PAGAMENTO S.A. - INSTITUIÇÃO DE PAGAMENTO',
            ],
            450 => [
                'nome_completo' => 'FITBANK INSTITUIÇÃO DE PAGAMENTOS ELETRÔNICOS S.A.',
                'ispb' => '13203354',
                'nome_curto' => 'FITBANK IP',
            ],
            126 => [
                'nome_completo' => 'BR Partners Banco de Investimento S.A.',
                'ispb' => '13220493',
                'nome_curto' => 'BR PARTNERS BI',
            ],
            325 => [
                'nome_completo' => 'Órama Distribuidora de Títulos e Valores Mobiliários S.A.',
                'ispb' => '13293225',
                'nome_curto' => 'ÓRAMA DTVM S.A.',
            ],
            301 => [
                'nome_completo' => 'DOCK INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '13370835',
                'nome_curto' => 'DOCK IP S.A.',
            ],
            173 => [
                'nome_completo' => 'BRL Trust Distribuidora de Títulos e Valores Mobiliários S.A.',
                'ispb' => '13486793',
                'nome_curto' => 'BRL TRUST DTVM SA',
            ],
            331 => [
                'nome_completo' => 'Fram Capital Distribuidora de Títulos e Valores Mobiliários S.A.',
                'ispb' => '13673855',
                'nome_curto' => 'FRAM CAPITAL DTVM S.A.',
            ],
            119 => [
                'nome_completo' => 'Banco Western Union do Brasil S.A.',
                'ispb' => '13720915',
                'nome_curto' => 'BCO WESTERN UNION',
            ],
            396 => [
                'nome_completo' => 'HUB INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '13884775',
                'nome_curto' => 'HUB IP S.A.',
            ],
            509 => [
                'nome_completo' => 'CELCOIN INSTITUICAO DE PAGAMENTO S.A.',
                'ispb' => '13935893',
                'nome_curto' => 'CELCOIN IP S.A.',
            ],
            309 => [
                'nome_completo' => 'CAMBIONET CORRETORA DE CÂMBIO LTDA.',
                'ispb' => '14190547',
                'nome_curto' => 'CAMBIONET CC LTDA',
            ],
            254 => [
                'nome_completo' => 'PARANÁ BANCO S.A.',
                'ispb' => '14388334',
                'nome_curto' => 'PARANA BCO S.A.',
            ],
            268 => [
                'nome_completo' => 'BARI COMPANHIA HIPOTECÁRIA',
                'ispb' => '14511781',
                'nome_curto' => 'BARI CIA HIPOTECÁRIA',
            ],
            401 => [
                'nome_completo' => 'IUGU INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '15111975',
                'nome_curto' => 'IUGU IP S.A.',
            ],
            107 => [
                'nome_completo' => 'Banco Bocom BBM S.A.',
                'ispb' => '15114366',
                'nome_curto' => 'BCO BOCOM BBM S.A.',
            ],
            334 => [
                'nome_completo' => 'BANCO BESA S.A.',
                'ispb' => '15124464',
                'nome_curto' => 'BANCO BESA S.A.',
            ],
            412 => [
                'nome_completo' => 'SOCIAL BANK BANCO MÚLTIPLO S/A',
                'ispb' => '15173776',
                'nome_curto' => 'SOCIAL BANK S/A',
            ],
            124 => [
                'nome_completo' => 'Banco Woori Bank do Brasil S.A.',
                'ispb' => '15357060',
                'nome_curto' => 'BCO WOORI BANK DO BRASIL S.A.',
            ],
            149 => [
                'nome_completo' => 'Facta Financeira S.A. - Crédito Financiamento e Investimento',
                'ispb' => '15581638',
                'nome_curto' => 'FACTA S.A. CFI',
            ],
            197 => [
                'nome_completo' => 'STONE INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '16501555',
                'nome_curto' => 'STONE IP S.A.',
            ],
            439 => [
                'nome_completo' => 'ID CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '16695922',
                'nome_curto' => 'ID CTVM',
            ],
            313 => [
                'nome_completo' => 'AMAZÔNIA CORRETORA DE CÂMBIO LTDA.',
                'ispb' => '16927221',
                'nome_curto' => 'AMAZÔNIA CC LTDA.',
            ],
            142 => [
                'nome_completo' => 'Broker Brasil Corretora de Câmbio Ltda.',
                'ispb' => '16944141',
                'nome_curto' => 'BROKER BRASIL CC LTDA.',
            ],
            529 => [
                'nome_completo' => 'PINBANK BRASIL INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '17079937',
                'nome_curto' => 'PINBANK IP',
            ],
            389 => [
                'nome_completo' => 'Banco Mercantil do Brasil S.A.',
                'ispb' => '17184037',
                'nome_curto' => 'BCO MERCANTIL DO BRASIL S.A.',
            ],
            184 => [
                'nome_completo' => 'Banco Itaú BBA S.A.',
                'ispb' => '17298092',
                'nome_curto' => 'BCO ITAÚ BBA S.A.',
            ],
            634 => [
                'nome_completo' => 'BANCO TRIANGULO S.A.',
                'ispb' => '17351180',
                'nome_curto' => 'BCO TRIANGULO S.A.',
            ],
            545 => [
                'nome_completo' => 'SENSO CORRETORA DE CAMBIO E VALORES MOBILIARIOS S.A',
                'ispb' => '17352220',
                'nome_curto' => 'SENSO CCVM S.A.',
            ],
            132 => [
                'nome_completo' => 'ICBC do Brasil Banco Múltiplo S.A.',
                'ispb' => '17453575',
                'nome_curto' => 'ICBC DO BRASIL BM S.A.',
            ],
            298 => [
                'nome_completo' => 'Vip\'s Corretora de Câmbio Ltda.',
                'ispb' => '17772370',
                'nome_curto' => 'VIPS CC LTDA.',
            ],
            377 => [
                'nome_completo' => 'BMS SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '17826860',
                'nome_curto' => 'BMS SCD S.A.',
            ],
            321 => [
                'nome_completo' => 'CREFAZ SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E A EMPRESA DE PEQUENO PORTE LT',
                'ispb' => '18188384',
                'nome_curto' => 'CREFAZ SCMEPP LTDA',
            ],
            260 => [
                'nome_completo' => 'NU PAGAMENTOS S.A. - INSTITUIÇÃO DE PAGAMENTO',
                'ispb' => '18236120',
                'nome_curto' => 'NU PAGAMENTOS - IP',
            ],
            470 => [
                'nome_completo' => 'CDC SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '18394228',
                'nome_curto' => 'CDC SCD S.A.',
            ],
            129 => [
                'nome_completo' => 'UBS Brasil Banco de Investimento S.A.',
                'ispb' => '18520834',
                'nome_curto' => 'UBS BRASIL BI S.A.',
            ],
            128 => [
                'nome_completo' => 'BRAZA BANK S.A. BANCO DE CÂMBIO',
                'ispb' => '19307785',
                'nome_curto' => 'BRAZA BANK S.A. BCO DE CÂMBIO',
            ],
            416 => [
                'nome_completo' => 'LAMARA SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '19324634',
                'nome_curto' => 'LAMARA SCD S.A.',
            ],
            461 => [
                'nome_completo' => 'ASAAS GESTÃO FINANCEIRA INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '19540550',
                'nome_curto' => 'ASAAS IP S.A.',
            ],
            194 => [
                'nome_completo' => 'PARMETAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '20155248',
                'nome_curto' => 'PARMETAL DTVM LTDA',
            ],
            536 => [
                'nome_completo' => 'NEON PAGAMENTOS S.A. - INSTITUIÇÃO DE PAGAMENTO',
                'ispb' => '20855875',
                'nome_curto' => 'NEON PAGAMENTOS S.A. IP',
            ],
            383 => [
                'nome_completo' => 'EBANX INSTITUICAO DE PAGAMENTOS LTDA.',
                'ispb' => '21018182',
                'nome_curto' => 'EBANX IP LTDA.',
            ],
            324 => [
                'nome_completo' => 'CARTOS SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '21332862',
                'nome_curto' => 'CARTOS SCD S.A.',
            ],
            310 => [
                'nome_completo' => 'VORTX DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
                'ispb' => '22610500',
                'nome_curto' => 'VORTX DTVM LTDA.',
            ],
            380 => [
                'nome_completo' => 'PICPAY INSTITUIçãO DE PAGAMENTO S.A.',
                'ispb' => '22896431',
                'nome_curto' => 'PICPAY',
            ],
            280 => [
                'nome_completo' => 'WILL FINANCEIRA S.A. CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '23862762',
                'nome_curto' => 'WILL FINANCEIRA S.A.CFI',
            ],
            146 => [
                'nome_completo' => 'GUITTA CORRETORA DE CAMBIO LTDA.',
                'ispb' => '24074692',
                'nome_curto' => 'GUITTA CC LTDA',
            ],
            343 => [
                'nome_completo' => 'FFA SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE LTDA.',
                'ispb' => '24537861',
                'nome_curto' => 'FFA SCMEPP LTDA.',
            ],
            279 => [
                'nome_completo' => 'PRIMACREDI COOPERATIVA DE CRÉDITO DE PRIMAVERA DO LESTE',
                'ispb' => '26563270',
                'nome_curto' => 'COOP DE PRIMAVERA DO LESTE',
            ],
            335 => [
                'nome_completo' => 'Banco Digio S.A.',
                'ispb' => '27098060',
                'nome_curto' => 'BANCO DIGIO',
            ],
            349 => [
                'nome_completo' => 'AL5 S.A. CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '27214112',
                'nome_curto' => 'AL5 S.A. CFI',
            ],
            427 => [
                'nome_completo' => 'COOPERATIVA DE CREDITO DOS SERVIDORES DA UNIVERSIDADE FEDERAL DO ESPIRITO SANTO',
                'ispb' => '27302181',
                'nome_curto' => 'CRED-UFES',
            ],
            374 => [
                'nome_completo' => 'REALIZE CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
                'ispb' => '27351731',
                'nome_curto' => 'REALIZE CFI S.A.',
            ],
            278 => [
                'nome_completo' => 'Genial Investimentos Corretora de Valores Mobiliários S.A.',
                'ispb' => '27652684',
                'nome_curto' => 'GENIAL INVESTIMENTOS CVM S.A.',
            ],
            271 => [
                'nome_completo' => 'IB Corretora de Câmbio, Títulos e Valores Mobiliários S.A.',
                'ispb' => '27842177',
                'nome_curto' => 'IB CCTVM S.A.',
            ],
            21 => [
                'nome_completo' => 'BANESTES S.A. BANCO DO ESTADO DO ESPIRITO SANTO',
                'ispb' => '28127603',
                'nome_curto' => 'BCO BANESTES S.A.',
            ],
            246 => [
                'nome_completo' => 'Banco ABC Brasil S.A.',
                'ispb' => '28195667',
                'nome_curto' => 'BCO ABC BRASIL S.A.',
            ],
            292 => [
                'nome_completo' => 'BS2 Distribuidora de Títulos e Valores Mobiliários S.A.',
                'ispb' => '28650236',
                'nome_curto' => 'BS2 DTVM S.A.',
            ],
            751 => [
                'nome_completo' => 'Scotiabank Brasil S.A. Banco Múltiplo',
                'ispb' => '29030467',
                'nome_curto' => 'SCOTIABANK BRASIL',
            ],
            352 => [
                'nome_completo' => 'TORO CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '29162769',
                'nome_curto' => 'TORO CTVM S.A.',
            ],
            208 => [
                'nome_completo' => 'Banco BTG Pactual S.A.',
                'ispb' => '30306294',
                'nome_curto' => 'BANCO BTG PACTUAL S.A.',
            ],
            386 => [
                'nome_completo' => 'NU FINANCEIRA S.A. - Sociedade de Crédito, Financiamento e Investimento',
                'ispb' => '30680829',
                'nome_curto' => 'NU FINANCEIRA S.A. CFI',
            ],
            746 => [
                'nome_completo' => 'Banco Modal S.A.',
                'ispb' => '30723886',
                'nome_curto' => 'BCO MODAL S.A.',
            ],
            546 => [
                'nome_completo' => 'U4C INSTITUIÇÃO DE PAGAMENTO S.A.',
                'ispb' => '30980539',
                'nome_curto' => 'U4C INSTITUIÇÃO DE PAGAMENTO S.A.',
            ],
            241 => [
                'nome_completo' => 'BANCO CLASSICO S.A.',
                'ispb' => '31597552',
                'nome_curto' => 'BCO CLASSICO S.A.',
            ],
            398 => [
                'nome_completo' => 'IDEAL CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '31749596',
                'nome_curto' => 'IDEAL CTVM S.A.',
            ],
            336 => [
                'nome_completo' => 'Banco C6 S.A.',
                'ispb' => '31872495',
                'nome_curto' => 'BCO C6 S.A.',
            ],
            612 => [
                'nome_completo' => 'Banco Guanabara S.A.',
                'ispb' => '31880826',
                'nome_curto' => 'BCO GUANABARA S.A.',
            ],
            604 => [
                'nome_completo' => 'Banco Industrial do Brasil S.A.',
                'ispb' => '31895683',
                'nome_curto' => 'BCO INDUSTRIAL DO BRASIL S.A.',
            ],
            505 => [
                'nome_completo' => 'Banco Credit Suisse (Brasil) S.A.',
                'ispb' => '32062580',
                'nome_curto' => 'BCO CREDIT SUISSE S.A.',
            ],
            329 => [
                'nome_completo' => 'QI Sociedade de Crédito Direto S.A.',
                'ispb' => '32402502',
                'nome_curto' => 'QI SCD S.A.',
            ],
            196 => [
                'nome_completo' => 'FAIR CORRETORA DE CAMBIO S.A.',
                'ispb' => '32648370',
                'nome_curto' => 'FAIR CC S.A.',
            ],
            342 => [
                'nome_completo' => 'Creditas Sociedade de Crédito Direto S.A.',
                'ispb' => '32997490',
                'nome_curto' => 'CREDITAS SCD',
            ],
            300 => [
                'nome_completo' => 'Banco de la Nacion Argentina',
                'ispb' => '33042151',
                'nome_curto' => 'BCO LA NACION ARGENTINA',
            ],
            477 => [
                'nome_completo' => 'Citibank N.A.',
                'ispb' => '33042953',
                'nome_curto' => 'CITIBANK N.A.',
            ],
            266 => [
                'nome_completo' => 'BANCO CEDULA S.A.',
                'ispb' => '33132044',
                'nome_curto' => 'BCO CEDULA S.A.',
            ],
            122 => [
                'nome_completo' => 'Banco Bradesco BERJ S.A.',
                'ispb' => '33147315',
                'nome_curto' => 'BCO BRADESCO BERJ S.A.',
            ],
            376 => [
                'nome_completo' => 'BANCO J.P. MORGAN S.A.',
                'ispb' => '33172537',
                'nome_curto' => 'BCO J.P. MORGAN S.A.',
            ],
            348 => [
                'nome_completo' => 'Banco XP S.A.',
                'ispb' => '33264668',
                'nome_curto' => 'BCO XP S.A.',
            ],
            473 => [
                'nome_completo' => 'Banco Caixa Geral - Brasil S.A.',
                'ispb' => '33466988',
                'nome_curto' => 'BCO CAIXA GERAL BRASIL S.A.',
            ],
            745 => [
                'nome_completo' => 'Banco Citibank S.A.',
                'ispb' => '33479023',
                'nome_curto' => 'BCO CITIBANK S.A.',
            ],
            120 => [
                'nome_completo' => 'BANCO RODOBENS S.A.',
                'ispb' => '33603457',
                'nome_curto' => 'BCO RODOBENS S.A.',
            ],
            265 => [
                'nome_completo' => 'Banco Fator S.A.',
                'ispb' => '33644196',
                'nome_curto' => 'BCO FATOR S.A.',
            ],
            7 => [
                'nome_completo' => 'BANCO NACIONAL DE DESENVOLVIMENTO ECONOMICO E SOCIAL',
                'ispb' => '33657248',
                'nome_curto' => 'BNDES',
            ],
            188 => [
                'nome_completo' => 'ATIVA INVESTIMENTOS S.A. CORRETORA DE TÍTULOS, CÂMBIO E VALORES',
                'ispb' => '33775974',
                'nome_curto' => 'ATIVA S.A. INVESTIMENTOS CCTVM',
            ],
            134 => [
                'nome_completo' => 'BGC LIQUIDEZ DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '33862244',
                'nome_curto' => 'BGC LIQUIDEZ DTVM LTDA',
            ],
            29 => [
                'nome_completo' => 'Banco Itaú Consignado S.A.',
                'ispb' => '33885724',
                'nome_curto' => 'BANCO ITAÚ CONSIGNADO S.A.',
            ],
            467 => [
                'nome_completo' => 'MASTER S/A CORRETORA DE CÂMBIO, TíTULOS E VALORES MOBILIáRIOS',
                'ispb' => '33886862',
                'nome_curto' => 'MASTER S/A CCTVM',
            ],
            243 => [
                'nome_completo' => 'BANCO MASTER S/A',
                'ispb' => '33923798',
                'nome_curto' => 'BANCO MASTER',
            ],
            397 => [
                'nome_completo' => 'LISTO SOCIEDADE DE CREDITO DIRETO S.A.',
                'ispb' => '34088029',
                'nome_curto' => 'LISTO SCD S.A.',
            ],
            78 => [
                'nome_completo' => 'Haitong Banco de Investimento do Brasil S.A.',
                'ispb' => '34111187',
                'nome_curto' => 'HAITONG BI DO BRASIL S.A.',
            ],
            525 => [
                'nome_completo' => 'INTERCAM CORRETORA DE CÂMBIO LTDA.',
                'ispb' => '34265629',
                'nome_curto' => 'INTERCAM CC LTDA',
            ],
            355 => [
                'nome_completo' => 'ÓTIMO SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '34335592',
                'nome_curto' => 'ÓTIMO SCD S.A.',
            ],
            367 => [
                'nome_completo' => 'VITREO DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '34711571',
                'nome_curto' => 'VITREO DTVM S.A.',
            ],
            528 => [
                'nome_completo' => 'REAG DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '34829992',
                'nome_curto' => 'REAG DTVM S.A.',
            ],
            445 => [
                'nome_completo' => 'PLANTAE S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '35551187',
                'nome_curto' => 'PLANTAE CFI',
            ],
            373 => [
                'nome_completo' => 'UP.P SOCIEDADE DE EMPRÉSTIMO ENTRE PESSOAS S.A.',
                'ispb' => '35977097',
                'nome_curto' => 'UP.P SEP S.A.',
            ],
            111 => [
                'nome_completo' => 'OLIVEIRA TRUST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIARIOS S.A.',
                'ispb' => '36113876',
                'nome_curto' => 'OLIVEIRA TRUST DTVM S.A.',
            ],
            512 => [
                'nome_completo' => 'FINVEST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '36266751',
                'nome_curto' => 'FINVEST DTVM',
            ],
            516 => [
                'nome_completo' => 'QISTA S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '36583700',
                'nome_curto' => 'QISTA S.A. CFI',
            ],
            408 => [
                'nome_completo' => 'BONUSPAGO SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '36586946',
                'nome_curto' => 'BONUSPAGO SCD S.A.',
            ],
            484 => [
                'nome_completo' => 'MAF DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '36864992',
                'nome_curto' => 'MAF DTVM SA',
            ],
            402 => [
                'nome_completo' => 'COBUCCIO S/A - SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTOS',
                'ispb' => '36947229',
                'nome_curto' => 'COBUCCIO S.A. SCFI',
            ],
            507 => [
                'nome_completo' => 'SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO EFÍ S.A.',
                'ispb' => '37229413',
                'nome_curto' => 'SCFI EFÍ S.A.',
            ],
            404 => [
                'nome_completo' => 'SUMUP SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '37241230',
                'nome_curto' => 'SUMUP SCD S.A.',
            ],
            418 => [
                'nome_completo' => 'ZIPDIN SOLUÇÕES DIGITAIS SOCIEDADE DE CRÉDITO DIRETO S/A',
                'ispb' => '37414009',
                'nome_curto' => 'ZIPDIN SCD S.A.',
            ],
            414 => [
                'nome_completo' => 'LEND SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '37526080',
                'nome_curto' => 'LEND SCD S.A.',
            ],
            449 => [
                'nome_completo' => 'DM SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '37555231',
                'nome_curto' => 'DM',
            ],
            518 => [
                'nome_completo' => 'MERCADO CRÉDITO SOCIEDADE DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO S.A.',
                'ispb' => '37679449',
                'nome_curto' => 'MERCADO CRÉDITO SCFI S.A.',
            ],
            406 => [
                'nome_completo' => 'ACCREDITO - SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '37715993',
                'nome_curto' => 'ACCREDITO SCD S.A.',
            ],
            403 => [
                'nome_completo' => 'CORA SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '37880206',
                'nome_curto' => 'CORA SCD S.A.',
            ],
            419 => [
                'nome_completo' => 'NUMBRS SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '38129006',
                'nome_curto' => 'NUMBRS SCD S.A.',
            ],
            435 => [
                'nome_completo' => 'DELCRED SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '38224857',
                'nome_curto' => 'DELCRED SCD S.A.',
            ],
            455 => [
                'nome_completo' => 'FÊNIX DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '38429045',
                'nome_curto' => 'FÊNIX DTVM LTDA.',
            ],
            421 => [
                'nome_completo' => 'LAR COOPERATIVA DE CRÉDITO - LAR CREDI',
                'ispb' => '39343350',
                'nome_curto' => 'CC LAR CREDI',
            ],
            443 => [
                'nome_completo' => 'CREDIHOME SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '39416705',
                'nome_curto' => 'CREDIHOME SCD',
            ],
            535 => [
                'nome_completo' => 'MARÚ SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '39519944',
                'nome_curto' => 'MARU SCD S.A.',
            ],
            457 => [
                'nome_completo' => 'UY3 SOCIEDADE DE CRÉDITO DIRETO S/A',
                'ispb' => '39587424',
                'nome_curto' => 'UY3 SCD S/A',
            ],
            428 => [
                'nome_completo' => 'CREDSYSTEM SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '39664698',
                'nome_curto' => 'CREDSYSTEM SCD S.A.',
            ],
            448 => [
                'nome_completo' => 'HEMERA DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '39669186',
                'nome_curto' => 'HEMERA DTVM LTDA.',
            ],
            452 => [
                'nome_completo' => 'CREDIFIT SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '39676772',
                'nome_curto' => 'CREDIFIT SCD S.A.',
            ],
            510 => [
                'nome_completo' => 'FFCRED SOCIEDADE DE CRÉDITO DIRETO S.A..',
                'ispb' => '39738065',
                'nome_curto' => 'FFCRED SCD S.A.',
            ],
            462 => [
                'nome_completo' => 'STARK SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '39908427',
                'nome_curto' => 'STARK SCD S.A.',
            ],
            465 => [
                'nome_completo' => 'CAPITAL CONSIG SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '40083667',
                'nome_curto' => 'CAPITAL CONSIG SCD S.A.',
            ],
            306 => [
                'nome_completo' => 'PORTOPAR DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
                'ispb' => '40303299',
                'nome_curto' => 'PORTOPAR DTVM LTDA',
            ],
            463 => [
                'nome_completo' => 'AZUMI DISTRIBUIDORA DE TíTULOS E VALORES MOBILIáRIOS LTDA.',
                'ispb' => '40434681',
                'nome_curto' => 'AZUMI DTVM',
            ],
            451 => [
                'nome_completo' => 'J17 - SOCIEDADE DE CRÉDITO DIRETO S/A',
                'ispb' => '40475846',
                'nome_curto' => 'J17 - SCD S/A',
            ],
            444 => [
                'nome_completo' => 'TRINUS SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '40654622',
                'nome_curto' => 'TRINUS SCD S.A.',
            ],
            519 => [
                'nome_completo' => 'LIONS TRUST DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '40768766',
                'nome_curto' => 'LIONS TRUST DTVM',
            ],
            454 => [
                'nome_completo' => 'MÉRITO DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '41592532',
                'nome_curto' => 'MÉRITO DTVM LTDA.',
            ],
            460 => [
                'nome_completo' => 'UNAVANTI SOCIEDADE DE CRÉDITO DIRETO S/A',
                'ispb' => '42047025',
                'nome_curto' => 'UNAVANTI SCD S/A',
            ],
            506 => [
                'nome_completo' => 'RJI CORRETORA DE TITULOS E VALORES MOBILIARIOS LTDA',
                'ispb' => '42066258',
                'nome_curto' => 'RJI',
            ],
            482 => [
                'nome_completo' => 'SBCASH SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '42259084',
                'nome_curto' => 'SBCASH SCD',
            ],
            17 => [
                'nome_completo' => 'BNY Mellon Banco S.A.',
                'ispb' => '42272526',
                'nome_curto' => 'BNY MELLON BCO S.A.',
            ],
            174 => [
                'nome_completo' => 'PEFISA S.A. - CRÉDITO, FINANCIAMENTO E INVESTIMENTO',
                'ispb' => '43180355',
                'nome_curto' => 'PEFISA S.A. - C.F.I.',
            ],
            481 => [
                'nome_completo' => 'SUPERLÓGICA SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '43599047',
                'nome_curto' => 'SUPERLÓGICA SCD S.A.',
            ],
            521 => [
                'nome_completo' => 'PEAK SOCIEDADE DE EMPRÉSTIMO ENTRE PESSOAS S.A.',
                'ispb' => '44019481',
                'nome_curto' => 'PEAK SEP S.A.',
            ],
            433 => [
                'nome_completo' => 'BR-CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '44077014',
                'nome_curto' => 'BR-CAPITAL DTVM S.A.',
            ],
            495 => [
                'nome_completo' => 'Banco de La Provincia de Buenos Aires',
                'ispb' => '44189447',
                'nome_curto' => 'BCO LA PROVINCIA B AIRES BCE',
            ],
            523 => [
                'nome_completo' => 'HR DIGITAL - SOCIEDADE DE CRÉDITO DIRETO S/A',
                'ispb' => '44292580',
                'nome_curto' => 'HR DIGITAL SCD',
            ],
            527 => [
                'nome_completo' => 'ATICCA - SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '44478623',
                'nome_curto' => 'ATICCA SCD S.A.',
            ],
            511 => [
                'nome_completo' => 'MAGNUM SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '44683140',
                'nome_curto' => 'MAGNUM SCD',
            ],
            513 => [
                'nome_completo' => 'ATF CREDIT SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '44728700',
                'nome_curto' => 'ATF CREDIT SCD S.A.',
            ],
            125 => [
                'nome_completo' => 'BANCO GENIAL S.A.',
                'ispb' => '45246410',
                'nome_curto' => 'BANCO GENIAL',
            ],
            532 => [
                'nome_completo' => 'EAGLE SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '45745537',
                'nome_curto' => 'EAGLE SCD S.A.',
            ],
            537 => [
                'nome_completo' => 'MICROCASH SOCIEDADE DE CRÉDITO AO MICROEMPREENDEDOR E À EMPRESA DE PEQUENO PORTE',
                'ispb' => '45756448',
                'nome_curto' => 'MICROCASH SCMEPP LTDA.',
            ],
            524 => [
                'nome_completo' => 'WNT CAPITAL DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '45854066',
                'nome_curto' => 'WNT CAPITAL DTVM',
            ],
            526 => [
                'nome_completo' => 'MONETARIE SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '46026562',
                'nome_curto' => 'MONETARIE SCD',
            ],
            488 => [
                'nome_completo' => 'JPMorgan Chase Bank, National Association',
                'ispb' => '46518205',
                'nome_curto' => 'JPMORGAN CHASE BANK',
            ],
            522 => [
                'nome_completo' => 'RED SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '47593544',
                'nome_curto' => 'RED SCD S.A.',
            ],
            530 => [
                'nome_completo' => 'SER FINANCE SOCIEDADE DE CRÉDITO DIRETO S.A.',
                'ispb' => '47873449',
                'nome_curto' => 'SER FINANCE SCD S.A.',
            ],
            65 => [
                'nome_completo' => 'Banco AndBank (Brasil) S.A.',
                'ispb' => '48795256',
                'nome_curto' => 'BCO ANDBANK S.A.',
            ],
            145 => [
                'nome_completo' => 'LEVYCAM - CORRETORA DE CAMBIO E VALORES LTDA.',
                'ispb' => '50579044',
                'nome_curto' => 'LEVYCAM CCV LTDA',
            ],
            250 => [
                'nome_completo' => 'BCV - BANCO DE CRÉDITO E VAREJO S.A.',
                'ispb' => '50585090',
                'nome_curto' => 'BCV - BCO, CRÉDITO E VAREJO S.A.',
            ],
            253 => [
                'nome_completo' => 'Bexs Corretora de Câmbio S/A',
                'ispb' => '52937216',
                'nome_curto' => 'BEXS CC S.A.',
            ],
            269 => [
                'nome_completo' => 'BANCO HSBC S.A.',
                'ispb' => '53518684',
                'nome_curto' => 'BCO HSBC S.A.',
            ],
            213 => [
                'nome_completo' => 'Banco Arbi S.A.',
                'ispb' => '54403563',
                'nome_curto' => 'BCO ARBI S.A.',
            ],
            139 => [
                'nome_completo' => 'Intesa Sanpaolo Brasil S.A. - Banco Múltiplo',
                'ispb' => '55230916',
                'nome_curto' => 'INTESA SANPAOLO BRASIL S.A. BM',
            ],
            18 => [
                'nome_completo' => 'Banco Tricury S.A.',
                'ispb' => '57839805',
                'nome_curto' => 'BCO TRICURY S.A.',
            ],
            422 => [
                'nome_completo' => 'Banco Safra S.A.',
                'ispb' => '58160789',
                'nome_curto' => 'BCO SAFRA S.A.',
            ],
            630 => [
                'nome_completo' => 'BANCO LETSBANK S.A.',
                'ispb' => '58497702',
                'nome_curto' => 'BCO LETSBANK S.A.',
            ],
            224 => [
                'nome_completo' => 'Banco Fibra S.A.',
                'ispb' => '58616418',
                'nome_curto' => 'BCO FIBRA S.A.',
            ],
            393 => [
                'nome_completo' => 'Banco Volkswagen S.A.',
                'ispb' => '59109165',
                'nome_curto' => 'BCO VOLKSWAGEN S.A',
            ],
            600 => [
                'nome_completo' => 'Banco Luso Brasileiro S.A.',
                'ispb' => '59118133',
                'nome_curto' => 'BCO LUSO BRASILEIRO S.A.',
            ],
            390 => [
                'nome_completo' => 'BANCO GM S.A.',
                'ispb' => '59274605',
                'nome_curto' => 'BCO GM S.A.',
            ],
            623 => [
                'nome_completo' => 'Banco Pan S.A.',
                'ispb' => '59285411',
                'nome_curto' => 'BANCO PAN',
            ],
            655 => [
                'nome_completo' => 'Banco Votorantim S.A.',
                'ispb' => '59588111',
                'nome_curto' => 'BCO VOTORANTIM S.A.',
            ],
            479 => [
                'nome_completo' => 'Banco ItauBank S.A.',
                'ispb' => '60394079',
                'nome_curto' => 'BCO ITAUBANK S.A.',
            ],
            456 => [
                'nome_completo' => 'Banco MUFG Brasil S.A.',
                'ispb' => '60498557',
                'nome_curto' => 'BCO MUFG BRASIL S.A.',
            ],
            464 => [
                'nome_completo' => 'Banco Sumitomo Mitsui Brasileiro S.A.',
                'ispb' => '60518222',
                'nome_curto' => 'BCO SUMITOMO MITSUI BRASIL S.A.',
            ],
            341 => [
                'nome_completo' => 'ITAÚ UNIBANCO S.A.',
                'ispb' => '60701190',
                'nome_curto' => 'ITAÚ UNIBANCO S.A.',
            ],
            237 => [
                'nome_completo' => 'Banco Bradesco S.A.',
                'ispb' => '60746948',
                'nome_curto' => 'BCO BRADESCO S.A.',
            ],
            381 => [
                'nome_completo' => 'BANCO MERCEDES-BENZ DO BRASIL S.A.',
                'ispb' => '60814191',
                'nome_curto' => 'BCO MERCEDES-BENZ S.A.',
            ],
            613 => [
                'nome_completo' => 'Omni Banco S.A.',
                'ispb' => '60850229',
                'nome_curto' => 'OMNI BANCO S.A.',
            ],
            637 => [
                'nome_completo' => 'BANCO SOFISA S.A.',
                'ispb' => '60889128',
                'nome_curto' => 'BCO SOFISA S.A.',
            ],
            653 => [
                'nome_completo' => 'BANCO VOITER S.A.',
                'ispb' => '61024352',
                'nome_curto' => 'BANCO VOITER',
            ],
            69 => [
                'nome_completo' => 'Banco Crefisa S.A.',
                'ispb' => '61033106',
                'nome_curto' => 'BCO CREFISA S.A.',
            ],
            370 => [
                'nome_completo' => 'Banco Mizuho do Brasil S.A.',
                'ispb' => '61088183',
                'nome_curto' => 'BCO MIZUHO S.A.',
            ],
            249 => [
                'nome_completo' => 'Banco Investcred Unibanco S.A.',
                'ispb' => '61182408',
                'nome_curto' => 'BANCO INVESTCRED UNIBANCO S.A.',
            ],
            318 => [
                'nome_completo' => 'Banco BMG S.A.',
                'ispb' => '61186680',
                'nome_curto' => 'BCO BMG S.A.',
            ],
            626 => [
                'nome_completo' => 'BANCO C6 CONSIGNADO S.A.',
                'ispb' => '61348538',
                'nome_curto' => 'BCO C6 CONSIG',
            ],
            508 => [
                'nome_completo' => 'AVENUE SECURITIES DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '61384004',
                'nome_curto' => 'AVENUE SECURITIES DTVM LTDA.',
            ],
            270 => [
                'nome_completo' => 'SAGITUR CORRETORA DE CÂMBIO S.A.',
                'ispb' => '61444949',
                'nome_curto' => 'SAGITUR CC',
            ],
            366 => [
                'nome_completo' => 'BANCO SOCIETE GENERALE BRASIL S.A.',
                'ispb' => '61533584',
                'nome_curto' => 'BCO SOCIETE GENERALE BRASIL',
            ],
            113 => [
                'nome_completo' => 'NEON CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '61723847',
                'nome_curto' => 'NEON CTVM S.A.',
            ],
            131 => [
                'nome_completo' => 'TULLETT PREBON BRASIL CORRETORA DE VALORES E CÂMBIO LTDA',
                'ispb' => '61747085',
                'nome_curto' => 'TULLETT PREBON BRASIL CVC LTDA',
            ],
            11 => [
                'nome_completo' => 'CREDIT SUISSE HEDGING-GRIFFO CORRETORA DE VALORES S.A',
                'ispb' => '61809182',
                'nome_curto' => 'C.SUISSE HEDGING-GRIFFO CV S/A',
            ],
            611 => [
                'nome_completo' => 'Banco Paulista S.A.',
                'ispb' => '61820817',
                'nome_curto' => 'BCO PAULISTA S.A.',
            ],
            755 => [
                'nome_completo' => 'Bank of America Merrill Lynch Banco Múltiplo S.A.',
                'ispb' => '62073200',
                'nome_curto' => 'BOFA MERRILL LYNCH BM S.A.',
            ],
            89 => [
                'nome_completo' => 'CREDISAN COOPERATIVA DE CRÉDITO',
                'ispb' => '62109566',
                'nome_curto' => 'CREDISAN CC',
            ],
            643 => [
                'nome_completo' => 'Banco Pine S.A.',
                'ispb' => '62144175',
                'nome_curto' => 'BCO PINE S.A.',
            ],
            140 => [
                'nome_completo' => 'NU INVEST CORRETORA DE VALORES S.A.',
                'ispb' => '62169875',
                'nome_curto' => 'NU INVEST CORRETORA DE VALORES S.A.',
            ],
            707 => [
                'nome_completo' => 'Banco Daycoval S.A.',
                'ispb' => '62232889',
                'nome_curto' => 'BCO DAYCOVAL S.A',
            ],
            288 => [
                'nome_completo' => 'CAROL DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LTDA.',
                'ispb' => '62237649',
                'nome_curto' => 'CAROL DTVM LTDA.',
            ],
            363 => [
                'nome_completo' => 'SINGULARE CORRETORA DE TÍTULOS E VALORES MOBILIÁRIOS S.A.',
                'ispb' => '62285390',
                'nome_curto' => 'SINGULARE CTVM S.A.',
            ],
            101 => [
                'nome_completo' => 'RENASCENCA DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '62287735',
                'nome_curto' => 'RENASCENCA DTVM LTDA',
            ],
            487 => [
                'nome_completo' => 'DEUTSCHE BANK S.A. - BANCO ALEMAO',
                'ispb' => '62331228',
                'nome_curto' => 'DEUTSCHE BANK S.A.BCO ALEMAO',
            ],
            233 => [
                'nome_completo' => 'Banco Cifra S.A.',
                'ispb' => '62421979',
                'nome_curto' => 'BANCO CIFRA',
            ],
            177 => [
                'nome_completo' => 'Guide Investimentos S.A. Corretora de Valores',
                'ispb' => '65913436',
                'nome_curto' => 'GUIDE',
            ],
            438 => [
                'nome_completo' => 'TRUSTEE DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA.',
                'ispb' => '67030395',
                'nome_curto' => 'TRUSTEE DTVM LTDA.',
            ],
            365 => [
                'nome_completo' => 'SIMPAUL CORRETORA DE CAMBIO E VALORES MOBILIARIOS  S.A.',
                'ispb' => '68757681',
                'nome_curto' => 'SIMPAUL',
            ],
            633 => [
                'nome_completo' => 'Banco Rendimento S.A.',
                'ispb' => '68900810',
                'nome_curto' => 'BCO RENDIMENTO S.A.',
            ],
            218 => [
                'nome_completo' => 'Banco BS2 S.A.',
                'ispb' => '71027866',
                'nome_curto' => 'BCO BS2 S.A.',
            ],
            293 => [
                'nome_completo' => 'Lastro RDV Distribuidora de Títulos e Valores Mobiliários Ltda.',
                'ispb' => '71590442',
                'nome_curto' => 'LASTRO RDV DTVM LTDA',
            ],
            285 => [
                'nome_completo' => 'FRENTE CORRETORA DE CÂMBIO S.A.',
                'ispb' => '71677850',
                'nome_curto' => 'FRENTE CC S.A.',
            ],
            80 => [
                'nome_completo' => 'B&T CORRETORA DE CAMBIO LTDA.',
                'ispb' => '73622748',
                'nome_curto' => 'B&T CC LTDA.',
            ],
            753 => [
                'nome_completo' => 'Novo Banco Continental S.A. - Banco Múltiplo',
                'ispb' => '74828799',
                'nome_curto' => 'NOVO BCO CONTINENTAL S.A. - BM',
            ],
            222 => [
                'nome_completo' => 'BANCO CRÉDIT AGRICOLE BRASIL S.A.',
                'ispb' => '75647891',
                'nome_curto' => 'BCO CRÉDIT AGRICOLE BR S.A.',
            ],
            281 => [
                'nome_completo' => 'Cooperativa de Crédito Rural Coopavel',
                'ispb' => '76461557',
                'nome_curto' => 'CCR COOPAVEL',
            ],
            754 => [
                'nome_completo' => 'Banco Sistema S.A.',
                'ispb' => '76543115',
                'nome_curto' => 'BANCO SISTEMA',
            ],
            311 => [
                'nome_completo' => 'DOURADA CORRETORA DE CÂMBIO LTDA.',
                'ispb' => '76641497',
                'nome_curto' => 'DOURADA CORRETORA',
            ],
            98 => [
                'nome_completo' => 'Credialiança Cooperativa de Crédito Rural',
                'ispb' => '78157146',
                'nome_curto' => 'CREDIALIANCA CCR',
            ],
            610 => [
                'nome_completo' => 'Banco VR S.A.',
                'ispb' => '78626983',
                'nome_curto' => 'BCO VR S.A.',
            ],
            712 => [
                'nome_completo' => 'Banco Ourinvest S.A.',
                'ispb' => '78632767',
                'nome_curto' => 'BCO OURINVEST S.A.',
            ],
            720 => [
                'nome_completo' => 'BANCO RNX S.A.',
                'ispb' => '80271455',
                'nome_curto' => 'BCO RNX S.A.',
            ],
            10 => [
                'nome_completo' => 'CREDICOAMO CREDITO RURAL COOPERATIVA',
                'ispb' => '81723108',
                'nome_curto' => 'CREDICOAMO',
            ],
            440 => [
                'nome_completo' => 'CREDIBRF - COOPERATIVA DE CRÉDITO',
                'ispb' => '82096447',
                'nome_curto' => 'CREDIBRF COOP',
            ],
            442 => [
                'nome_completo' => 'MAGNETIS - DISTRIBUIDORA DE TÍTULOS E VALORES MOBILIÁRIOS LTDA',
                'ispb' => '87963450',
                'nome_curto' => 'MAGNETIS - DTVM',
            ],
            283 => [
                'nome_completo' => 'RB INVESTIMENTOS DISTRIBUIDORA DE TITULOS E VALORES MOBILIARIOS LIMITADA',
                'ispb' => '89960090',
                'nome_curto' => 'RB INVESTIMENTOS DTVM LTDA.',
            ],
            33 => [
                'nome_completo' => 'BANCO SANTANDER (BRASIL) S.A.',
                'ispb' => '90400888',
                'nome_curto' => 'BCO SANTANDER (BRASIL) S.A.',
            ],
            217 => [
                'nome_completo' => 'Banco John Deere S.A.',
                'ispb' => '91884981',
                'nome_curto' => 'BANCO JOHN DEERE S.A.',
            ],
            41 => [
                'nome_completo' => 'Banco do Estado do Rio Grande do Sul S.A.',
                'ispb' => '92702067',
                'nome_curto' => 'BCO DO ESTADO DO RS S.A.',
            ],
            117 => [
                'nome_completo' => 'ADVANCED CORRETORA DE CÂMBIO LTDA',
                'ispb' => '92856905',
                'nome_curto' => 'ADVANCED CC LTDA',
            ],
            654 => [
                'nome_completo' => 'BANCO DIGIMAIS S.A.',
                'ispb' => '92874270',
                'nome_curto' => 'BCO DIGIMAIS S.A.',
            ],
            371 => [
                'nome_completo' => 'WARREN CORRETORA DE VALORES MOBILIÁRIOS E CÂMBIO LTDA.',
                'ispb' => '92875780',
                'nome_curto' => 'WARREN CVMC LTDA',
            ],
            212 => [
                'nome_completo' => 'Banco Original S.A.',
                'ispb' => '92894922',
                'nome_curto' => 'BANCO ORIGINAL',
            ],
            289 => [
                'nome_completo' => 'EFX CORRETORA DE CÂMBIO LTDA.',
                'ispb' => '94968518',
                'nome_curto' => 'EFX CC LTDA.',
            ]
        ];
    }

    public function nomeCompleto(): string
    {
        return self::lista()[$this->value]['nome_completo'] ?? 'Nome não encontrado';
    }

    public function ispb(): string
    {
        return self::lista()[$this->value]['ispb'] ?? 'ISPB não encontrado';
    }

    public function codigo(): string
    {
        return str_pad($this->value, 3, 0, STR_PAD_LEFT);
    }

    public function nomeCurto(): string
    {
        return self::lista()[$this->value]['nome_curto'] ?? 'Nome Curto não encontrado';
    }
}