-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Oca 2018, 07:19:43
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `anket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `borndate`
--

CREATE TABLE `borndate` (
  `Id` int(11) NOT NULL,
  `day` int(11) NOT NULL DEFAULT '0',
  `month` int(11) NOT NULL DEFAULT '0',
  `year` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `borndate`
--

INSERT INTO `borndate` (`Id`, `day`, `month`, `year`) VALUES
(1, 18, 9, 1915),
(2, 9, 8, 1974),
(3, 8, 4, 1995);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `education`
--

CREATE TABLE `education` (
  `ID` int(11) NOT NULL,
  `education` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `education`
--

INSERT INTO `education` (`ID`, `education`) VALUES
(1, 'İlköğretim'),
(2, 'Orta Okul'),
(3, 'Lise'),
(4, 'Önlisans'),
(5, 'Lisans'),
(6, 'Yüksek Lisans'),
(7, 'Akademik Eğitim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `imageurl` varchar(255) DEFAULT NULL,
  `fragmanEmbed` text,
  `puan` double DEFAULT NULL,
  `imdb` double DEFAULT NULL,
  `aciklama` text,
  `catId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `movies`
--

INSERT INTO `movies` (`ID`, `mname`, `imageurl`, `fragmanEmbed`, `puan`, `imdb`, `aciklama`, `catId`) VALUES
(1, 'Kurtlar Vadisi Irak', 'images/KVI.jpg', NULL, NULL, 5.9, 'Filmin hikayesi gerçek bir olay olan “Çuval Hadisesi”ne atıfla başlıyor… 4 Temmuz 2003 tarihinde Kuzey Irak’ta konuşlanmış on bir kişilik özel Türk kuvvetinin gayri resmi, yarı gizli karargahına, müttefik Amerikan birlikleri gelir. Türk ekibi, bunu müttefiklerinin olağan ziyaretlerinden biri zanneder… Fakat, bu sefer durum farklıdır. Değişen konjonktürde Amerika bölgede “son sözü” söyleyen tek güç olmak hedefindedir. Onlara göre bölgede artık Türklere yer yoktur… O gün on bir asker, başlarına çuval geçirilerek, halkın gözlerinin önünde, askerlik onurları hiçe sayılarak sınır dışı edilirler… Filmde her şey buraya kadar gerçekleri anlatıyor… Gerçekler üstüne kurduğumuz hikayemizde Süleyman Aslan, o on bir kişiden biridir. Vaktiyle aşağılanarak teslim olmayı onuruna yediremeyen Üsteğmen Süleyman geride bir mektup bırakıp intihar eder… Mektup Polat Alemdar’a yazılmıştır… Polat Alemdar, çok özel olarak yetiştirilmiş bir Türk istihbaratçısıdır. Devlet adına çalışan gizli bir servisin, yurt içi ve yurt dışı sayısız operasyonuna katılmıştır… Hayatta hep görevleri için yaşayan Polat Alemdar, görevi uğruna intihar eden arkadaşının vasiyetine kayıtsız kalamaz… O artık adamları ile birlikte Kuzey Irak’tadır, gerekirse ölmek için…', NULL),
(2, 'Hızlı ve Öfkeli 7', 'images/hızlı7.jpg', NULL, NULL, 7.2, 'Dominic Toretto (Vin Diesel) ve ekibi, artık suç dünyasını geride bırakmaya karar vermiştir. Owen Shaw`u alt ettikten sonra yollarını ayırmışlardır. Ancak komadaki Shaw`un kardeşi Deckard Shaw (Jason Statham) kardeşini bu hale getirenlerden intikamını almaya kararlıdır ve başta Torretto olmak üzere ekibin üyelerini tek tek öldürmeye ant içmiştir. Bu sırada Jakarde adlı Somalili bir terörist ve Mr. Nobody diye bilinen bir üst düzey hükumet görevlisi, Tanrının Gözü adlı çok değerli bir bilgisayar programının peşine düşmüştür. Toretto ekibini tekrar toplayarak Shaw`u durdurmak ve programı geri almak zorunda kalacaktır.\r\n', NULL),
(3, 'Titanik', 'images/titanic.jpg', NULL, NULL, 7.8, 'İnsan elinden çıkmış en büyük ve en gösterişli yüzen araç olan Titanic yola koyuldu. Batmaz, sarsılmaz denilen bu büyük lüks yolcu gemisinde yolculuk yapmak, 20. Yüzyılın muhteşem bir rüyasıydı. Ancak bu büyük rüya sadece 4.5 gün serecek ve anısını bir sonraki yüzyıla bile taşıyacak büyüklükte bir kabusa dönüşecekti. İşte bugün bile heyecan uyandıran bu acı ancak bir o kadar da sinematografik felaket hikayesini bu kez James Cameron\'un yönetiminde ve sinema tarihinin gördüğü en büyük bütçeyle gerçekleştirilmiş son versiyonuyla izliyoruz. Geminin ilk ve son yolculuğuyla örtüşen, kısa soluklu ama ölümsüz bir aşk öyküsüne yer veren Cameron, Titanic kadar büyük bir aşk öyküsü merkez alarak, bu bildik felaketi farklı bir tarzda anlatmak istemiş. Aşıklar ise son dönemde yükselen yetenekli genç oyuncular kuşağının öne çıkan isimlerinden Kate Winslet ve Leonardo Di Caprio. 1998\'de 14 dalda Oscar adayı olan Titanic, 11 dalda heykelcik kazandı dünyaca büyük bir felaket olan titanic sinemadada felaket etkisi yaratmıştır.\r\n', NULL),
(4, 'Evim Sensin', 'images/evimsensin.jpg', NULL, NULL, 5, 'Kırılmış kalbinin yaralarını üzerinde taşıyan Leyla başından geçen bir ayrılığın sonunda baba evine döner ve bir yanda kırılan kalbini bir yanda otoriter babası Selim’le olan bağını onarmaya başlar. Çocukluk evinin kapısından adımını attığında hayatının en zor 4 yilina girdiğinden habersizdir Leyla ile yolu kesişinceye kadar yalnızca kendisi için yaşamış olan İskender, yetimhanede büyümüş ve hiçbir zaman gerçek bir evi olmamış bir insandır.\r\n', NULL),
(5, 'G.O.R.A.', 'images/gora.jpg', NULL, NULL, 8, 'Anadolu’nun turistik kentlerinden birinde tüccarlık yapan Arif uzaylılar tarafından kaçırılarak G.O.R.A adlı gezegene götürülür. Arif, gezegenden kaçmak için uğraşır. Bunun için de uzaylı Komutan Logar’a karşı mücadele vermesi gerekir. Bu mücadele esnasında gezegenin kralının kızı olan Ceku\'ya aşık olan Arif, G.O.R.A\'da tanıştığı dostlarının da yardımıyla Logar\'ı alt etmeye çalışır.\r\n', NULL),
(6, 'A.R.O.G', 'images/arog.jpg', NULL, NULL, 7.3, 'G.O.R.A gezegeninde tutsak olan Arif\'e büyük kin besleyen Komutan Logar, onu zaman makinesiyle bir milyon yıl öncesine gönderir. Taş Devri insanları, dinozorlar ve prehistorik kuşların yer aldığı AROG\'da Arif\'in yeni maceralarını izleyeceğiz.\r\n    ', NULL),
(7, 'Buz Devri 4: Kıtalar Ayrılıyor', 'images/buzdevri4.jpg', NULL, NULL, 6.6, 'Bir buzdağından derme çatma bir gemi yapan kahramanlarımızın maceralarla dolu epik deniz seferi başlıyor. Manny ve arkadaşlarını bu yeni dünyada egzotik deniz canavarları ve acımasız korsanlar da bekliyor.\r\n    ', NULL),
(8, 'Moana', 'images/moana.jpg', NULL, NULL, 7.6, 'Antik çağlarda Okyanusya\'daki Güney Pasifik adalarında yaşayan bir genç kız olan Moana, kuşaklar boyunca denizlerde yolculuk etmiş bir ailenin temsilcisidir. Ailesine ve yaşadığı adanın halkına yardım edebilmek amacıyla maceralı bir yolculuğa çıktığında, hayran olduğu yarı-tanrı Maui ile işbirliği yapması gerekecektir.\r\n    ', NULL),
(9, 'Ayla', 'images/ayla.jpg', NULL, NULL, 9.1, 'Kore Savaşı\'na asker olarak gönderilen Süleyman (İsmail Hacıoğlu), savaş esnasında öksüz kalan ve himayesini aldığı küçük Koreli kızla sevgi dolu samimi bir bağ kurar. Ayla adını verdiği küçük çocuğu aylarca bakar, ancak savaş bittiğinde kimsesiz çocuğu Türkiye\'ye götürmek istediğinde Kore yasalarının engeliyle karşılaşır ve zor da olsa ayrılırlar. Bu olaylardan 60 yıl geçtikten sonra Süleyman Bey, nerede olduğu, neler yaptığı hakkında hiçbir bilgisi olmadığı Ayla\'yı yeniden görebilmek için harekete geçer.\r\nAyla filmi, Kore\'de savaşmış Süleyman Dilbirliği\'nin gerçek hikayesinden esinlenerek çekildi.\r\n    ', NULL),
(10, 'Babam ve Oğlum', 'images/babamveoglum.jpg', NULL, NULL, 8.5, '1980 darbesinde annesini kaybeden küçük Deniz (babası o dönemde bir çok erkek çocuğa verilen ismi koymuş) yedi yıl sonra hiç görmediği dedesinin Ege’deki çiftliğine doğru bir yolculuğa çıkar. Deniz’in dedesini hiç görmemesinin nedeni dedesiyle babasının yıllardır küs oluşudur. Hüseyin Efendi (Çetin Tekindor)okumaya diye gönderdiği oğlunun politik olaylara karıştığını öğrenince onu evlatlıktan silmiştir çünkü.Sadık’ın her şeye rağmen baba evine geri dönüşünün nedeni Deniz’den ayrılmak zorunda oluşudur; küçük oğlunu babasına emanet edecektir. Kelimenin tam anlamıyla Deniz bu çiftlikte hafif tatlı kaçık bir ailenin ortasında bulur kendini. Evin yanaşmaları,küs teyze(Şerif Sezer), traktör kullanan ve telsizle konuşan müthiş bir babaanne(Hümeyra), bileğinden boğazına kadar bilezikle dolaşan gelin Hanife (Binnur Kaya) ve saf bir amca (Yetkin Dikinciler).Düşünsenize hepsi bağırarak ve hep bir ağızdan konuşuyor. Sadık Uğruna savaştığı bir Türkiye’ye ve terk ettiği sevgilisiyle ve kendiyle kasabada yüzleşirken; çocuk, dedesinin ve babasının arasındaki tüm buzları eritecektir.\r\n    ', NULL),
(11, '2012', 'images/2012.jpg', NULL, NULL, 5.8, 'Büyük bütçeli felaket filmlerinin değişmez yönetmeni Roland Emmerich yine benzer bir yapımla karşımızda. Bazı teorisyenlere göre 21 Aralık 2012 tarihinde dünyanın sonunun geleceğini öngören Maya medeniyetinin bu öngörüsünün doğru çıktığı bir geleceğin anlatıldığı 2012 adlı filmde insanların hayatta kalma mücadelelerine tanık oluyoruz. Filmin kadrosu oldukça sağlam: John Cusack , Thandie Newton , Woody Harrelson , Amanda Peet , Danny Glover , Oliver Platt ve Chiwetel Ejiofor ilk göze çarpan isimler.\r\n    ', NULL),
(12, 'Altıncı His', 'images/altincihis.jpg', NULL, NULL, 8.1, 'Sekiz yaşında bir çocuk olan Cole Sear karanlık güçlerin etkisi altındadır. Zaman zaman hayaletler tarafından ziyaret edilen bu çocuk, gölgelerin arasından ortaya çıkıveren hayaletlerle kendi iradesi dışında bağlantılar kurmakta ve bu durumdan çok korkmaktadır. Kendisinde normal ötesi bir takım güçlerin var olduğunun farkına varan küçük çocuk bunların sebebini anlayamadığı gibi çektiği acıları da çocuk psikoloğu Malcolm Crowe\'un dışında hiç kimseye anlatamamaktadır. Ancak küçük hastasındaki doğaüstü yeteneklerin gerisindeki esrar perdesini aralamaya çalışan psikoloğun çalışmaları ilerledikçe her ikisinde de bir takım korkutucu ve açıklanamaz gelişmeler başlayacaktır.\r\n    ', NULL),
(13, 'Recep İvedik 5', 'images/recep5.jpg', NULL, NULL, 3.4, 'Recep İvedik (Şahan Gökbakar) mahallesinde yaşayan bir şoför tanıdığının vefatı sonrası taziye evine gittiğinde, adamın aldığı, ancak ömrü yetmediği için tamamlayamadığı son işi yerine getirmek için gönüllü olur. Bu da Avrasya Gençlik Oyunları’na katılacak milli takım kafilesini Makedonya’ya götürmektir. Yolda Recep’in yaptığı kuru fasulye, sporcuların zehirlenmesine neden olunca kafile başkanı, takımı oyunlardan çekmekten başka bir çare düşünemez. Ancak o noktada Recep kafile başkanlığını ele alır ve rahatsızlanan sporcuların yerine kamyoncu arkadaşlarını çağırır.\r\n    ', NULL),
(14, 'Düğün Dernek', 'images/dugundernek.jpg', NULL, NULL, 7.3, 'Orta Anadolu\'daki bir köyde, 4 arkadaş imece usulü düğün yapmaya çalışınca işler birbirine girer ve planlanan evlilik sürprizler doğurmaya başlar...\r\nİşler Güçler dizisinin yönetmeni Selçuk Aydemir\'in yazıp yönettiği, başrollerde ise Ahmet Kural ve Murat Cemcir\'in oynadığı film. Filmin çekimleri Erzincan ve Sivas\'ta yapılmıştır.\r\n    ', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `survey`
--

CREATE TABLE `survey` (
  `ID` int(11) NOT NULL,
  `filmId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `kadroPuan` int(11) DEFAULT NULL,
  `senaryoPuan` int(11) DEFAULT NULL,
  `akis` int(11) DEFAULT NULL,
  `genel` int(11) DEFAULT NULL,
  `language` varchar(15) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `survey`
--

INSERT INTO `survey` (`ID`, `filmId`, `userId`, `kadroPuan`, `senaryoPuan`, `akis`, `genel`, `language`, `category`) VALUES
(1, 2, 1, 5, 5, 6, 4, 'altyazi', 'macera'),
(2, 4, 1, 5, 6, 5, 5, 'orjinal', 'romantik'),
(3, 6, 1, 7, 8, 8, 7, 'orjinal', 'fantastik'),
(4, 5, 1, 8, 7, 8, 8, 'orjinal', 'komedi'),
(5, 8, 1, 6, 7, 5, 5, 'dublaj', 'komedi'),
(6, 12, 1, 7, 6, 8, 5, 'altyazi', 'psikolojik'),
(7, 1, 1, 4, 4, 4, 10, 'altyazi', ''),
(8, 8, 2, 6, 7, 7, 6, 'dublaj', 'komedi'),
(9, 14, 2, 5, 4, 8, 9, 'altyazi', 'korku'),
(10, 2, 3, 8, 8, 8, 9, 'altyazi', 'aksiyon'),
(11, 2, 2, 4, 5, 5, 7, 'altyazi', 'romantik'),
(12, 2, 2, 9, 9, 9, 9, 'altyazi', 'macera'),
(13, 4, 2, 6, 6, 6, 6, 'altyazi', 'romantik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fk_borndate` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `gender` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `fk_borndate`, `Education`, `gender`) VALUES
(1, 1, 4, 'male'),
(2, 2, 3, 'male'),
(3, 3, 5, 'male');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `borndate`
--
ALTER TABLE `borndate`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `catId` (`catId`);

--
-- Tablo için indeksler `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `filmId` (`filmId`),
  ADD KEY `userId` (`userId`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Education` (`Education`),
  ADD KEY `userborn` (`fk_borndate`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `borndate`
--
ALTER TABLE `borndate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `education`
--
ALTER TABLE `education`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `survey`
--
ALTER TABLE `survey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `category` (`ID`);

--
-- Tablo kısıtlamaları `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`filmId`) REFERENCES `movies` (`ID`),
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`ID`);

--
-- Tablo kısıtlamaları `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `userborn` FOREIGN KEY (`fk_borndate`) REFERENCES `borndate` (`Id`),
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `borndate` (`Id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Education`) REFERENCES `education` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
